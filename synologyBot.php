<?php
// Synology Chat API Settings
$url = "YOUR_WEBHOOKS_TOKEN"; // Follow tuto in readme

// Data of the message to send
$message = array(
    "text" => "YOUR_MESSAGE"
);
$data = array(
    "payload" => json_encode($message)
);

// Sending POST request to Synology Chat API
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// API response check
if ($response === false) {
    var_dump($response);
    echo "Error, connexion can not be established. Please Verify your token.";
} else {
    $response_data = json_decode($response, true);
    if ($response_data["success"]) {
        echo "Message sent !";
    } else {
        echo "Error sending message.";
    }
}
?>
