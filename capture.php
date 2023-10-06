<?php
// Capture information received from the client
$data = json_decode(file_get_contents('php://input'), true);

// Store the captured information in a database or log it to a file
// For this example, we will just append it to a log file
$logFile = 'capture.log';
file_put_contents($logFile, json_encode($data) . PHP_EOL, FILE_APPEND);

// Respond with a success message
http_response_code(200);
?>
