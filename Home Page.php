<?php
session_start();
//..........................check login
/*........................................................................
..........................................................................
..........................................................................*/
if ($_SERVER['REQUEST_METHOD']=="POST"){
	$username = $_POST['username'];
	$password = $_POST["password"];
	$shapassword=sha1($password);
}else {
	header('location:index.php');
	
}
include 'conn.php';



$stmt = $conn->prepare("SELECT username , password FROM user WHERE username =? AND password=? ");
$stmt->execute(array($username , $shapassword));
$count = $stmt->rowCount();

if ($count==1){
	$_SESSION['username']=$username;
	$stmt3 = $conn->prepare("SELECT * FROM user WHERE username='$username'");
  $stmt3->execute();
  $rows = $stmt3->fetchAll();
  foreach ($rows as $row) {
	$_SESSION['position']=$row['position'] ;
	 $_SESSION['group_id']=$row['group_id'];
	}

if ($_SESSION['group_id']=='1'){

	
	header('location:nav.php');}
	elseif ($_SESSION['group_id']!='1') {
		
		$stmt3 = $conn->prepare("SELECT * FROM user WHERE username='$username'");
  $stmt3->execute();
  $rows = $stmt3->fetchAll();
  foreach ($rows as $row) {
	$_SESSION['position']=$row['position'] ;
	 $_SESSION['group_id']=$row['group_id'];
	}
	header('location:../brunches/orderbrunches.php');
	
}
}else {
	
	echo $count ;
}






