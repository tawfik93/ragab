<?php

include 'conn.php';


if ($_SERVER['REQUEST_METHOD']=='GET'){
$first=$_GET['first_name'];
$last=$_GET['last_name'];

$username1=$_GET['username1'];

$username=$_GET['username'];
$emile=$_GET['emile'];
$phone=$_GET['phone'];
$position=$_GET['position'];
$group=$_GET['group'];
$trim=trim($username);
echo var_dump($trim);



     $sql = "UPDATE `user` SET `last name` = '$last' , `first name` = '$first' , `emile` = '$emile' , `phone` = '$phone' ,`position` = '$position' , `group_id` = '$group' , `username` = '$username1'  WHERE `user`.`username` ='$trim'";


$stmt = $conn->prepare($sql);
$stmt->execute();
echo header('location:nav.php');
}else{
	echo '<h1>Sorry!!! you cannot enter this page</h1>';
}


