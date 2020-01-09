<!DOCTYPE html>

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="../login/css.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php
include 'conn.php';
session_start(); 
if ($_SESSION['group_id']=='1'){

if ($_SERVER['REQUEST_METHOD']=='POST') {
$position=$_POST['position'];
$group=$_POST['group'];

$sql = "INSERT INTO `position` (`group_id`, `position`) VALUES ('$group', '$position')";
	$conn->exec($sql);


header('location:position.php');
}else{


	?>
	<title>Add Position</title>
</head>
<body>
	<h1>Add Position</h1>

	<pre>
	<form action="addpos.php" method="POST">
		<div id='apper'>
		<label>position</label>
		<input type="text" name="position">

		<label>Group Id</label>
		<input type="text" name="group">
		
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
width:162px;
background-color: #89DCAF ;
height: 30px;


     }


</style>
<?php
}
}else {header('location:../index.php');} ?>