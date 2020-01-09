<?php

session_start(); 

if(isset($_SESSION['username']) and isset($_SESSION['position'])){
  $name=$_SESSION['username'];
  $position=$_SESSION['position'];
?><pre>
<h4>UserName : <?php echo $name;?>      <?php echo $position;?>                                         <a href="logout.php">logout</a> </h4></pre>
<?php
include 'conn.php';
$stmt = $conn->prepare("SELECT username FROM user");
$stmt->execute();
$count = $stmt->rowCount();
?>

<!DOCTYPE html>
<html>
<head>
<title>member</title>
<link rel="stylesheet" type="text/css" href="../login/css.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <h4><pre><a href="../log/nav.php">member</a>    <a href="../brunches/position.php">position</a>    <a href="../brunches/product.php">product</a>    <a href="../brunches/php.php">order</a>    </h4></pre>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="member">



        	<?php 
include 'conn.php';


/*............................................................................
.......................................................................
.............................TABLE MEMBER  ----  (DATA BASE).......................
............................................................
............................................................................*/
$stmt2 = $conn->prepare("SELECT * FROM user");
$stmt2->execute();
$rows = $stmt2->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	

	<link rel="stylesheet" type="text/css" href="css.css">
	<title> Members</title>
</head>
<body>
	<h1>MEMBERS</h1><?php echo "<pre>"."    ". "countMember"."  ". $count . "</pre>";
?>
	<table border="0px">
		<thead>
		<tr>
			<td>Name</td>
			<td>UserName</td>
			
			<td>Emile</td>
			<td>Phone Number</td>
			<td>Position</td>
			<td>Group ID</td>
			

		</tr>
	</thead>   
	
		
			<?php
			foreach ($rows as $row){
				echo "<tr>";
				echo "<td>" . $row['first name'] . " "  . $row['last name']. "</td>";
				echo "<td>" . $row['username'] . "</td>";
				echo "<td>" . $row['emile'] .  "</td>";
				echo "<td>" . '0'. $row['phone'] .  "</td>";
				echo "<td>" . $row['position'] .  "</td>";
				echo "<td>" . $row['group_id'] .  "</td>";
				;
				
				
				

			}?>
	</table>
	<form action="member.php" method="get">
	<input class="btn1" type="submit" name="addmember" value="Add New Member" >
	<a href="del.php" class="btn1">delet</a>
	<a href="code.php" class="btn1">Edit</a>

</body>
</html>



<style>
	.nav{
    margin: 10px;
    background-color: #333;
    height: 50px;
    overflow: hidden;
}
.nav a{
    float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 15px;
  text-decoration: none;
  font-size: 17px;
}
.nav a:hover {
  background-color: #ddd;
  color: black;
}
.nav a.active {
  background-color: #4CAF50;
  color: white;}
  table{

font-size: 20px;
border-spacing: 20px;
border-radius: 20px;
box-shadow: 1px 1px 1px green;
text-transform: capitalize;
margin: 2px 3px;
width: 100%;


}
thead{
  font-size: 25px;
border-radius: 10px;
box-shadow: .5px .5px .5px   green;
padding: 1px 1px;
}
.btn{
      font-family: Arial ;
color: green;
width: 400px;
padding: 10px 5px;
border: 0;
font-weight: bold;
font-size: 17px;
background: #7eb786;
border-radius:100px;
text-decoration: none;
}
.btn1{
        font-family: Arial ;
color: green;
width: 150px;
padding: 10px 5px;
border: 0;
font-weight: bold;
font-size: 17px;
background: #7eb786;
border-radius:100px;
text-decoration: none;
margin: 10px 10px;

}
</style>
<?php
}else header('location:../index.php'); ?>