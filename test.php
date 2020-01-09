<?php
include 'conn.php';
$username='tragab';
$stmt3 = $conn->prepare("SELECT position FROM user WHERE username='$username'");
  $stmt3->execute();
  $rows = $stmt3->fetchAll();
  foreach ($rows as $row) {
		 $row['position'];
		echo $row['position'];
	}