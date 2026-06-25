<?php

include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact_queries
(name,email,subject,message)
VALUES
('$name','$email','$subject','$message')";

if($conn->query($sql))
{
    echo "Message Sent Successfully";
}
else
{
    echo "Error : " . $conn->error;
}

$conn->close();

?>