<?php

session_start(); 

if(isset($_SESSION['username']) and isset($_SESSION['position'])){?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js.js"></script>
	<title></title>
</head>
<body>

	<pre>
	<form action="uporder.php" method="POST" id="demo">
		<div id='apper'>
		<label>date of day</label>
		<input type="date" name="date">
		
		<div id='btn'>
		<input type="submit" class="btn" name="" value="Enter" onclick="myFunction()">
		</div>
		</div>
	</form>
</pre>
</body>
<style>
	

    #apper {
 
    width: 30%;
    margin: 200px auto;
    padding: 0px;
    top: 50px;
    opacity: 90%;
    background-color: #f1f1f3;
    padding: 2px;
    width: 400px;
    height: 200px;
    size: 100px;}
   .btn{ 
width:150px;
background-color: #89DCAF ;
height: 20px;


     }

</style>
<?php
}else header('location:../index.php'); ?>