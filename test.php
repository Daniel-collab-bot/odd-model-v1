<?php
$url = "http://127.0.0.1:5000/predict"; 

$data = json_encode(["input" => [1.2, 3.4, 5.6, 7.8]]); // Example input

$options = [
    "http" => [
        "header" => "Content-Type: application/json",
        "method" => "POST",
        "content" => $data
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    die("Error: Could not connect to the API.");
}

$result = json_decode($response, true);
echo "Model Prediction: " . json_encode($result);
?>
