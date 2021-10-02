<?php
session_start();
include'connect.php';
$Username= $_POST['Username'];
$Password= $_POST['Password'];

$sql ="SELECT * FROM user12 WHERE Username='$Username' AND Password='$Password'";
$result = $conn->query($sql);

if(!$row=$result->fetch_assoc()){
echo"Your user name or password is incorrect";
}else{
	$_SESSION['id']=$row['id'];	
}		
//header("Location:index.php");
?>