<?php
if (isset($_POST['submit'])) {
    include '../db_con.php';

    $title   = trim($_POST['title']);
    $details = trim($_POST['details']);

    // Upload folder
    $target_dir = "banner_uploads/";

    // Validate upload
    if (!isset($_FILES["image"]) || $_FILES["image"]["error"] != 0) {
        echo "No image uploaded or upload error.";
        exit;
    }

    $allowed_types = ['image/jpeg', 'image/jpg', 'image/webp','image/png', 'image/gif'];
    $file_mime     = mime_content_type($_FILES["image"]["tmp_name"]);

    if (!in_array($file_mime, $allowed_types)) {
        echo "Invalid image type. Only JPG, PNG, GIF allowed.";
        exit;
    }


    $extension   = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
    $image_name  = "banner_" . uniqid() . "." . $extension;
    $target_file = $target_dir . $image_name;

    // Move file
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "Error uploading file.";
        exit;
    }


    $stmt = $con->prepare("INSERT INTO add_banner (title, details, image_path) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $details, $target_file);

    if ($stmt->execute()) {
        header('Location: banner_list.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
