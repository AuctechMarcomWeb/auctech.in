<?php
if (isset($_POST['email'], $_POST['phone'], $_POST['date'], $_POST['time'], $_POST['service_type'], $_POST['message']))
{
    $email        = trim($_POST['email']);
    $phone        = trim($_POST['phone']);
    $date         = trim($_POST['date']);
    
    // Convert time to AM/PM format
    $time24 = trim($_POST['time']); 
    $timeObj = DateTime::createFromFormat('H:i', $time24);
    $time = $timeObj->format('h:i A');

    $service_type = trim($_POST['service_type']);
    $message      = trim($_POST['message']);

    if (empty($email) || empty($phone) || empty($date) || empty($time) || empty($service_type) || empty($message))
    {
        echo 'error';
        exit;
    }

    include('db_con.php');

    $sql = "INSERT INTO book_appointement (email, phone, date, time, service_type, message) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

    if ($stmt === false)
    {
        echo 'error: ' . $con->error;
        exit;
    }

    $stmt->bind_param("ssssss", $email, $phone, $date, $time, $service_type, $message);

    if ($stmt->execute())
    {
        echo 'success';
    } else
    {
        echo 'error: ' . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
