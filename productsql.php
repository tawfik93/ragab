<?php
include 'conn.php';


if ($_SERVER['REQUEST_METHOD']=='GET'){


for ($c=1; $c <=6 ; $c++) { 
$d='t'.$c;
		if(isset($_GET[$d])){
		$sql = "INSERT INTO `complete_product` (`id`, `name`) VALUES ($c ,'$_GET[$d]')";
$conn->exec($sql);


header('location:product.php');
}
}}
elseif($_SERVER['REQUEST_METHOD']=='POST'){

	$name=$_POST['name'];
	$vip=$_POST['vip'];
	$vip1=$_POST['vip1'];

	     $sql = "UPDATE `complete_product` SET `name` = '$name'  WHERE `complete_product`.`vip` ='$vip'";


$stmt = $conn->prepare($sql);
$stmt->execute();

$sql="DELETE FROM `complete_product` WHERE `complete_product`.`vip` = '$vip1'";
$stmt = $conn->prepare($sql);
$stmt->execute();

header('location:product.php');
}