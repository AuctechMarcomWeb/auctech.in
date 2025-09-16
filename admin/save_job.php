<?php
include('../db_con.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Collect and sanitize POST data
    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $phone   = trim($_POST['phone']);
    $post    = trim($_POST['post']);      
    $message = trim($_POST['message']);

   
    $uploadDir = __DIR__ . "/volunteer_uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

   
    $cv_path = null;
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0) {
        $allowedCV = [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'image/jpeg',
            'image/jpg',
            'image/png'
        ];

        if ($_FILES['image_path']['size'] > 3*1024*1024 || !in_array($_FILES['image_path']['type'], $allowedCV)) {
            echo "error: Invalid CV. Must be PDF/DOC/DOCX/JPG/PNG and ≤3MB";
            exit;
        }

        $ext = pathinfo($_FILES['image_path']['name'], PATHINFO_EXTENSION);
        $cv_name = "cv_" . uniqid() . "." . $ext;
        $cv_full_path = $uploadDir . $cv_name;

        if (move_uploaded_file($_FILES['image_path']['tmp_name'], $cv_full_path)) {
            $cv_path = "volunteer_uploads/" . $cv_name;
        } else {
            echo "error: Failed to upload CV";
            exit;
        }
    } else {
        echo "error: Please upload your CV";
        exit;
    }

    // Insert data into database
    $sql = "INSERT INTO apply_job (name, email, phone, post, message, image_path) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssss", $name, $email, $phone, $post, $message, $cv_path);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
