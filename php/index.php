<?php
$servername ="localhost";
$username ="root";
$password ="root";
$conn =new mysqli($servername,$username,$$password);
if($conn->connect_error){
    die("connection failed".$connect_error);
}
echo "connection successful";
$conn->close();
?>