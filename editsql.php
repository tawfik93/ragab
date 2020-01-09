<?php

include 'conn.php';



if ($_SERVER['REQUEST_METHOD']=='GET'){
$username=$_GET['username'];
 

$sql = $conn->prepare("SELECT * FROM `user` WHERE username = '$username'");
$sql->execute();
$rows = $sql->fetchAll();


	?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
<title>UPDATE</title>
<link rel="stylesheet" type="text/css" href="../login/css.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

	<h1 >UPDATE</h1>
	<pre>
<form action="editsql.php" method="post">
	<div class="form-group1" border=1px>
		<label>First Name</label>
		<input type="text" class="form-control2" name="first_name" value="
		<?php foreach ($rows as $row) {
	echo $row['first name'];
}?>">
		<label>last Name</label>
		<input type="text" class="form-control2" name="last_name" value="
		<?php foreach ($rows as $row) {
	echo $row['last name'];
}?>">
	
		<label>New UserName</label>
		<input type="text" class="form-control2"  name="username1" value="
		<?php foreach ($rows as $row) {
	echo $row['username'];
}?>">
		
		<input type="hidden" class="form-control2" name="username" value="
		<?php foreach ($rows as $row) {
	echo $row['username'];
}?>">
		<label>Emile</label>
		<input type="text" class="form-control2" name="emile" value="
		<?php foreach ($rows as $row) {
	echo $row['emile'];
}?>">
		<label>Phone Number</label>
		<input type="number" class="form-control2" name="phone" value="
		<?php foreach ($rows as $row) {
	echo $row['phone'];
}?>">
		<label>Position</label>
		<input type="text" class="form-control2" name="position" value="
		<?php foreach ($rows as $row) {
	echo $row['position'];
}?>">
		<label>Group_id</label>
		<input type="number" class="form-control2" name="group" value="
		<?php foreach ($rows as $row) {
	echo $row['group_id'];
}?>">
	
	<input type="submit" class="btn btn-block btn-success" name="send" value="UPDATE">
	</div>
	</pre>
</form>


<?php
}




}
?>
<style>
	.form-group1{
  background-color: #fff ;
 width: 300PX;
 margin: 120PX 320PX;}
 .form-group1 .form-control2{
  width: 100%;}
  .btn{
font-family: Arial ;
width: 400px;
padding: 10px 5px;
margin: 0px 120px;
</style>