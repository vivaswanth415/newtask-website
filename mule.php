<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $Phone_Number= $_POST['Phone_Number'];


    // Process your data or send it to Mule application
    // Example: sending data to Mule application
    $muleUrl = 'http://0.0.0.0:8081/test';
    $postData = [
        'Name' => $Name,
        'Email' => $Email
        'Phone_Number' => $Phone_Number
    ];

    // Initialize cURL session
    $ch = curl_init($muleUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

    // Execute cURL session and capture response
    $response = curl_exec($ch);
    curl_close($ch);

    // Handle Mule application response if needed
    if ($response) {
        echo "Data successfully submitted to Mule application";
    } else {
        echo "Failed to submit data to Mule application";
    }
}
?>