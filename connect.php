<?php
$input_data = $_POST['input_data'];
$command = escapeshellcmd("python3 ml_model.py " . $input_data);
$output = shell_exec($command);
echo $output;
?>