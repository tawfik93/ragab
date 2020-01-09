<?php
for ($i=0; $i < 10; $i++) { 
	$u= 's'.$i;
echo $u;
}
$f=$_POST['f'];
$image = imagecreatefrompng($f);
echo $image;
?>
<form action="date.php" method="post">
	<input type="file" name="f">
	<input type="submit" name="">
</form>