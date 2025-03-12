from flask import Flask, request, jsonify
from flask_cors import CORS  # Import CORS
import onnxruntime as rt
import numpy as np
import cv2
import io
from PIL import Image

app = Flask(__name__)

# Enable CORS for all routes
CORS(app)

# Load ONNX model
MODEL_PATH = "my_model.onnx"  # Ensure the correct path
session = rt.InferenceSession(MODEL_PATH)

@app.route("/", methods=["GET"])
def home():
    return jsonify({"message": "ONNX Model API is running!"})

@app.route("/predict", methods=["POST"])
def predict():
    try:
        if 'file' not in request.files:
            return jsonify({"error": "No file uploaded"}), 400

        file = request.files['file']
        image = Image.open(io.BytesIO(file.read()))
        image = np.array(image)
        image = cv2.resize(image, (224, 224))  # Resize to model input size
        image = image.astype(np.float32) / 255.0  # Normalize
        image = np.expand_dims(image, axis=0)  # Add batch dimension

        # Get input name from the model
        input_name = session.get_inputs()[0].name

        # Run model inference
        result = session.run(None, {input_name: image})
        prediction = np.argmax(result[0])
        confidence = np.max(result[0])

        # Map predictions to class names
        classes = ["Citrus Canker", "Healthy", "Citrus Melanose"]
        predicted_class = classes[prediction]

        return jsonify({"class": predicted_class, "confidence": float(confidence)})

    except Exception as e:
        print(f"Error: {e}")  # Log error for debugging
        return jsonify({"error": str(e)}), 500

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000, debug=True)
