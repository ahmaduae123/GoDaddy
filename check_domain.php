<?php
header('Content-Type: application/json');
$domain = $_GET['domain'] ?? '';
$available = rand(0, 1) === 1;

echo json_encode([
  'domain' => $domain,
  'available' => $available
]);
