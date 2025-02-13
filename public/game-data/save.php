<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$file_path = __DIR__ . '/results.json';

// Create directory if not exists
if (!file_exists(dirname($file_path))) {
    mkdir(dirname($file_path), 0755, true);
}

file_put_contents($file_path, json_encode($data, JSON_PRETTY_PRINT));
echo json_encode(['status' => 'success']);
?>