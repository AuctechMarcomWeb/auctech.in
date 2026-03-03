<?php

// start or ensure session if needed
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Replace with your secret key (keep this secret)
$recaptcha_secret = '6Ld8H94rAAAAAEznpazXyXHJOHAKI6M0MCBTRSep';

// Honeypot server-side check
if (!empty($_POST['phone_'])) {
    echo 'error: bot detected';
    exit;
}

// Check required fields quickly
if (!isset($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message'], $_POST['g-recaptcha-response'])) {
    echo 'error: missing fields';
    exit;
}

$recaptcha_response = $_POST['g-recaptcha-response'];

// Verify reCAPTCHA response with Google
$verify_url = 'https://www.google.com/recaptcha/api/siteverify';
$data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

// Use curl if available
$ch = curl_init($verify_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$verify_response = curl_exec($ch);
curl_close($ch);

if ($verify_response === false) {
    echo 'error: captcha verification failed';
    exit;
}

$captcha_result = json_decode($verify_response, true);

if (!isset($captcha_result['success']) || $captcha_result['success'] !== true) {
    // Optionally check $captcha_result['error-codes'] for logging
    echo 'error: captcha not valid';
    exit;
}

if (isset($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message'])) {
   
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
  
    $message = trim($_POST['message']);
    $added_date = date('Y-m-d H:i:s');

    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        echo 'error'; 
        exit;
    }

    include('db_con.php');

   
    $sql = "INSERT INTO contact (name, phone, email, message, added_date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);


    if ($stmt === false) {
        echo 'error: ' . $con->error;
        exit;
    }

    $stmt->bind_param("sssss", $name, $phone, $email, $message, $added_date);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error: ' . $stmt->error; 
    }

  
    $stmt->close();
    $con->close();
}
?>