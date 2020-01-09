<?php

session_start(); 

if ($_SESSION['group_id']=='1'){

if ($_SERVER['REQUEST_METHOD']=='POST') {

include 'conn.php';}else{echo header('location:index.php');}

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=$_POST['password'];

$emile=$_POST['emile'];
$phone=$_POST['phone'];
$position=$_POST['position'];
$group=$_POST['group'];


$stmt = $conn->prepare("SELECT username FROM user WHERE username =?");
$stmt->execute(array($username));
$count = $stmt->rowCount();

if ($count==0){
	
	$sql = "INSERT INTO `user` (`first name`, `last name`, `username`, `password`, `emile`, `phone`, `position`, `group_id`) VALUES ('$firstname', '$lastname', '$username', sha1('$password'), '$emile', '$phone', '$position' , $group);";
	$conn->exec($sql);
	header('location:nav.php');



}else {
	echo "<h3>This user already found .";
	echo "<form action='member.php' class='h'>
<input type='submit' value='back to signup'></form >"."<h3>";
}

}else header('location:index.php'); ?>



  



	
