<meta charset="utf-8">
<title>BRUNCHES</title>
<link rel="stylesheet" type="text/css" href="../login/css.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<?php
session_start();
if(isset($_SESSION['username']) and isset($_SESSION['position'])){
include 'conn.php';

$idprun=$_SESSION['group_id'];

for ($c=1; $c <=6 ; $c++) { 

  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=$c");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 
  $count=count($rows);
$date=$_POST['date'];
$i=1;
while ( $i<= 1) {
	foreach ($rows as $row) {
		$brunches=$_SESSION['position'];
		$t=$row['name'];
		$ct=$row['vip'];
		$id=$row['vip'];
		$sql = "INSERT INTO `updata` (`idprun`, `brunches` ,`idname`,`itemid`, `name`, `count` , `date`) VALUES ('$idprun' , '$brunches' ,'$c','$id', '$_POST[$t]', '$_POST[$ct]' , '$date')";
$conn->exec($sql);
	}
	$i++;
}
}

for ($s=1; $s <=10 ; $s++) { 
$size='s'.$s;
$co='c'.$s;
$des='d'.$s;
$fil='f'.$s;
$si=$_POST[$size];
$c=$_POST[$co];
$d=$_POST[$des];
	$myimge = $_FILES[$fil]['tmp_name'];
@$imge= addslashes(file_get_contents($myimge));


$sql = "INSERT INTO `upspecial` (`brunches`,`size`, `count`, `describe`,`imge`, `date`) 
VALUES ('$brunches' ,'$si', '$c', '$d','$imge','$date')";
$conn->exec($sql);


$sql = "DELETE FROM updata WHERE count=0";
$conn->exec($sql);
$sql = "DELETE FROM upspecial WHERE count=0";
$conn->exec($sql);


}
echo "<p class='h1'>recordation completed successfully
<p>";
echo
  "<a href='../log/logout.php'>log out</a>"." &#160"." &#160"." &#160".
  "<a href='updata.php'>back</a>";
;


}else{header('location:../index.php');}

?>
<style>
	p{
		margin: 200px 100px;
		height: 50px;
		text-align: center;
		background-color: #F4F7F9;
	}
</style>