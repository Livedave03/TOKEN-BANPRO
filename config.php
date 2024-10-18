<?php
header('Content-Type: application/json');

// Datos sensibles
$token = "7625337098:AAErr75qPsnrENYk-IXLSrF5G8MTg7R1Dgo";
$chat_id = "5157616506";

// Devolver los datos en formato JSON
echo json_encode([
    'token' => $token,
    'chat_id' => $chat_id
]);
?>
