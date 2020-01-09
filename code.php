<?php

session_start(); 

if ($_SESSION['group_id']=='1'){?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js.js"></script>
	<title></title>
</head>
<body>

	<pre>
	<form action="edit.php" method="get" id="demo">
		<div id='apper'>
		<label>username want edit</label>
		<input type="text" name="username">
		
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
}else header('location:index.php'); ?>