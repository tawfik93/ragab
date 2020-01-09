<?php
session_start(); 

if ($_SESSION['group_id']=='1'){
?>
<script>
function myFunction() {
  alert("are you sure delet!");
}
</script>

<?php

include 'conn.php';

if ($_SERVER['REQUEST_METHOD']=="POST"){

    $username=$_POST['username'];
$sql = "DELETE FROM user WHERE username='$username'";
$conn->exec($sql);


echo header('location:nav.php');
}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>delet member</title>
</head>
<body>
<h1>delet member</h1>
	<pre>
	<form action="del.php" method="POST">
        
		<div id='apper'>
            <p>enter username want delet</p>
		<label>username</label>
		<input type="text" name="username" required="required">
		<div id='btn'>
		<input type="submit" class="btn" name="" value="delet" onclick="myFunction">
		</div>
		</div>
	</form>


</pre>
<?php } ?>
</body>
<style>
	h1{
    font-weight: bold;
    font-size: 60px;
    margin: auto auto;
    text-align: center;
    padding: 10px 5px;
    font-family: Gabriola;
padding: 10px 5px;
width: 100%;
margin-bottom: 10px;
border-top: 0;
border-bottom: 0;
border-right: 0;
border-left-color: #a1ffae;
border-left-width: 3px;
border-radius: 7px;
box-shadow: 2px 2px 3px #45754c;
}

    #apper {
 
    width: 30%;
    margin: 50px auto;
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
p{
    text-align: center;
}

</style>
<?php
}else header('location:index.php'); ?>