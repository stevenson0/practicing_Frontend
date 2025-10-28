<?php
header('Content-Type: application/json');
$data = [
  "speed" => rand(100, 300),
  "rpm" => rand(10, 20),
  "gear" => rand(1, 6),
  "temp" => rand(100, 250)
];
echo json_encode($data);
?>