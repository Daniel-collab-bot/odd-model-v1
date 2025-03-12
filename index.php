<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Your existing CSS styling */
    body {
      background-color: #f8f9fa;
      color: #333;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: #007bff;
      color: white;
      padding: 20px;
      text-align: center;
      border-radius: 10px;
      width: 50%;
      margin: 80px auto 0;
    }

    .content-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: calc(100vh - 150px);
    }

    .content {
      text-align: center;
    }

    .upload-section {
      margin-top: 20px;
      text-align: center;
    }

    .upload-box {
      border: 2px solid black;
      border-radius: 10px;
      width: 250px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
      background-color: #fff;
    }

    .upload-box button {
      border: 2px solid black;
      width: 100px;
      height: 40px;
      background-color: #f8f9fa;
      color: #333;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s, box-shadow 0.3s;
    }

    .upload-box button:hover {
      background-color: #e0e0e0;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .upload-box .upload-button {
      background-color: #28a745;
      color: white;
      border: none;
      font-size: 16px;
      width: 120px;
      height: 40px;
    }

    .upload-box .upload-button:hover {
      background-color: #218838;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .file-name {
      width: 150px;
      padding: 5px;
      border: 1px solid black;
      border-radius: 5px;
      text-align: center;
      background-color: #fff;
      color: #333;
    }

    .action-links {
      display: flex;
      justify-content: flex-end;
      gap: 20px;
      background-color: #004085;
      padding: 10px 20px;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
    }

    .action-links a {
      display: inline-block;
      padding: 10px 15px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
    }

    .action-links a:hover {
      background-color: #0056b3;
    }

    #prediction-result {
      margin-top: 20px;
      font-size: 18px;
      color: #007bff;
      text-align: center;
    }
  </style>
</head>
<body>

<div class="action-links">
  <a href="about.php">About Us</a>
  <a href="contact.php">Contact Us</a>
  <a href="login.php?logout='1'">Logout</a>
</div>

<div class="content-container">
  <div class="header">
    <h2>Welcome to Orange Disease Detection System</h2>
  </div>

  <div class="content">
    <p>Here, you can upload an image for analysis. Once the image is uploaded, it will be analyzed, and feedback will be given based on the state of your upload.</p>
  </div>

  <div class="upload-section">
    <div class="upload-box">
      <input type="file" id="fileInput" accept="image/*" style="display: none;" onchange="showFileName()">
      <button onclick="document.getElementById('fileInput').click();">Attach</button>
      <span id="fileName" class="file-name">No file</span>
      <button class="upload-button" onclick="uploadFile()">Upload</button>
    </div>
    <div id="prediction-result"></div>
  </div>
</div>

<<script>
  function showFileName() {
    const fileInput = document.getElementById('fileInput');
    const fileNameSpan = document.getElementById('fileName');

    if (fileInput.files.length > 0) {
      fileNameSpan.textContent = `Attached: ${fileInput.files[0].name}`;
    } else {
      fileNameSpan.textContent = "No file";
    }
  }

  function uploadFile() {
    const fileInput = document.getElementById('fileInput');

    if (fileInput.files.length === 0) {
      alert("Please attach a file before uploading.");
      return;
    }

    const file = fileInput.files[0];
    const formData = new FormData();
    formData.append("file", file);

    fetch("http://127.0.0.1:5000/predict", {
      method: "POST",
      body: formData
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(data => {
      let page = "";
      if (data.class === "Citrus Canker") {
        page = "citruscanker.html";
      } else if (data.class === "Citrus Melanose") {
        page = "citrusmelanose.html";
      } else if (data.class === "Healthy") {
        page = "healthy.html";
      }

      if (page) {
        window.location.href = `${page}?confidence=${(data.confidence * 100).toFixed(2)}`;
        ;
      } else {
        alert("Unknown prediction result.");
      }
    })
    .catch(error => {
      alert("Something went wrong. Try again!");
      console.error("Error uploading file:", error);
    });
  }
</script>

</body>
</html>
