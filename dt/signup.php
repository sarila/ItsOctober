<?php
session_start();
include'connect.php';

$Firstname= $_POST['Firstname'];
$Lastname= $_POST['Lastname'];
$Username= $_POST['Username'];
$Password= $_POST['Password'];

$sql ="INSERT INTO user12 (first,last,uid,password) 
VALUES('$Firstname','$Lastname','$Username','$Password')"; 
$result = $conn->query($sql);
header("Location:index.php");
?>