<meta charset="utf-8">
<body>

<?php
session_start();
if(isset($_SESSION['username']) and isset($_SESSION['position'])){

 include 'conn.php' ;


$name=$_SESSION['username'];
$position=$_SESSION['position'];
?><pre>
<h4>UserName : <?php echo $name;?>    <?php echo $position;?>                                         <a href="../log/logout.php">logout</a> </h4></pre>
<form action="brunchessql.php" method="post" enctype="multipart/form-data">
<h3> date of day<input type="date" required="required" name="date" dir="ltr">  </h3>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>BRUNCHES</title>
<link rel="stylesheet" type="text/css" href="../login/css.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
	.bs-example{
    	margin: 20px;
    }
</style>
<script>
    $(document).ready(function(){ 
        $("#myTab a").click(function(e){
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>
</head>
<body>
    <h1><input type="submit" class="btn btn-block btn-success" name="send"></h1>
    <form>
<div class="bs-example" >
    <ul id="myTab" class="nav nav-pills">
        <li class="nav-item">
            <a href="#torta" class="nav-link active">TORTA</a> 
        </li>
        <li class="nav-item">
            <a href="#gato" class="nav-link">GATO</a>
        </li>
        <li class="nav-item">
            <a href="#betyfour" class="nav-link">BETYFOUR</a>
            <li class="nav-item">
            <a href="#salizon" class="nav-link">SALIZON</a>
            <li class="nav-item">
            <a href="#chocolata" class="nav-link">CHOCOLATA</a>
        </li>
        <li class="nav-item">
            <a href="#sharqy" class="nav-link">SHARQY</a>
        </li>

        <li class="nav-item">
            <a href="#special" class="nav-link">SPECIAL ORDER</a>
        </li>
       
    </ul>
    </form>



    <!-- .....................................................................
...............................................................................
............................................................................................
........................................TORTA...................... -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="torta">
            <h4 class="mt-2">TORTA</h4>
            <table>

 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=1 ");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); ?>
        <thead>
        <tr>
            <td>Name PRODUCT</td>
            <td>COUNT PRODUCT</td>

        </tr>
    </thead>   
    
        
            
            <?php           

            foreach ($rows as $row){
                $t=$row['name'];
                $ct=$row['vip'];
                echo "<tr>";
               echo "<td>"."<input type='text' disabled name=".$t." value=".$row['name'] .">" ."</td>";
               

                echo "<td>" . "<input type='number' name=".$ct.">"  .  "</td>";
                echo "<td>"."<input type='hidden' name=".$t." value=".$row['name'] .">" ."</td>";
            
                echo "</tr>";

            }?>
            
            
    </table>
    </div>
<!-- ................................................................................
..................................................................................
................................................................................
.........................................................................GATO -->
        
        <div class="tab-pane fade" id="gato">
            <h4 class="mt-2">GATO</h4>
            <table border="0px">
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id= 2");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); ?>
        <thead>
        <tr>
            <td>Name PRODUCT</td>
            <td>COUNT PRODUCT</td>

        </tr>
    </thead>   
    
        
            <?php
            foreach ($rows as $row){
                $g=$row['name'];
                $cg=$row['vip'];
                echo "<tr>";
                echo "<td>"."<input type='text' disabled name=".$g." value=".$row['name'] .">" ."</td>";
                echo "<td>" . "<input type='number' name=".$cg." class='input'>". "</td>";
                echo "<td>"."<input type='hidden' name=".$g." value=".$row['name'] .">" ."</td>";
                

            }?>
    </table>

        </div>
        <!-- ........................................................................
....................................................................
....................................................................
..................................................................BETYFOUR -->
        <div class="tab-pane fade" id="betyfour">
            <h4 class="mt-2">BETYFOUR</h4>
            <table border="0px">
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=3");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); ?>
        <thead>
        <tr>
            <td>Name PRODUCT</td>
            <td>COUNT PRODUCT</td>

        </tr>
    </thead>   
    
        
            <?php
            foreach ($rows as $row){
                $b=$row['name'];
                $cb=$row['vip'];
                echo "<tr>";
                echo "<td>"."<input type='text' disabled name=".$b." value=".$row['name'] .">" ."</td>";
                echo "<td>" ."<input type='number' name=".$cb." class='input'>". "</td>";
                echo "</tr>";
                echo "<td>"."<input type='hidden' name=".$b." value=".$row['name'] .">" ."</td>";


            }?>
    </table>
            
        </div>
        <!-- ...................................................................
.................................................................................
.....................................................................................
........................................SALIZONE ..............-->
        <div class="tab-pane fade" id="salizon">
            <h4 class="mt-2">SALIZON</h4>
            <table border="0px">
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=4");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); ?>
        <thead>
        <tr>
            <td>Name PRODUCT</td>
            <td>COUNT PRODUCT</td>

        </tr>
    </thead>   
    
        
            <?php
            foreach ($rows as $row){
                $s=$row['name'];
                $cs=$row['vip'];
                echo "<tr>";
                echo "<td>"."<input type='text' disabled name=".$s." value=".$row['name'] .">" ."</td>";
                echo "<td>" . "<input type='number' name=".$cs." class='input'>". "</td>";
                echo "</tr>";
                echo "<td>"."<input type='hidden' name=".$s." value=".$row['name'] .">" ."</td>";


            }?>
    </table>
            
        </div>
        <!-- ............................................................
......................................................................................
................................................................................
........................................CHOCOLAT -->
        <div class="tab-pane fade" id="chocolata">
            <h4 class="mt-2">CHOCOLATA</h4>
            <table border="0px">
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=5");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); ?>
        <thead>
        <tr>
            <td>Name PRODUCT</td>
            <td>COUNT PRODUCT</td>

        </tr>
    </thead>   
    
        
            <?php
            foreach ($rows as $row){
                $ch=$row['name'];
                $cch=$row['vip'];
                echo "<tr>";
                echo "<td>"."<input type='text' disabled name=".$ch." value=".$row['name'] .">" ."</td>";
                echo "<td>" ."<input type='number' name=".$cch." class='input'>". "</td>";
                echo "</tr>";
                echo "<td>"."<input type='hidden' name=".$ch." value=".$row['name'] .">" ."</td>";


            }?>
    </table>
            
        </div>

        <!-- ................................................................................
..................................................................................
................................................................................
.........................................................................SHARQY -->
        
        <div class="tab-pane fade" id="sharqy">
            <h4 class="mt-2">SHARQY</h4>
            <table border="0px">
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=6");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); ?>
        <thead>
        <tr>
            <td>Name PRODUCT</td>
            <td>COUNT PRODUCT</td>

        </tr>
    </thead>   
    
        
            <?php
            foreach ($rows as $row){
                $sh=$row['name'];
                $csh=$row['vip'];
                echo "<tr>";
                echo "<td>"."<input type='text' disabled name=".$sh." value=".$row['name'] .">" ."</td>";
                echo "<td>" . "<input type='number' name=".$csh." class='input'>". "</td>";
                echo "</tr>";
                echo "<td>"."<input type='hidden' name=".$sh." value=".$row['name'] .">" ."</td>";


            }?>
    </table>

        </div>
                <!-- ...................................................................
.................................................................................
.....................................................................................
........................................special ..............-->
   
       <div class="tab-pane fade" id="special">
            <h4 class="mt-2">SPECIAL ORDER</h4>
            <table border="1px">
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product ");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); ?>
        <thead>
        <tr>
            <td>size</td>
            <td>COUNT PRODUCT</td>
            <td>describe</td>
            <td>imge</td>

        </tr>
      
          <?php
       for ($i=1; $i <=10 ; $i++) { 

        $size='s'.$i;
        $count='c'.$i;
        $des='d'.$i;
        $file='f'.$i;
           echo "<tr>" ;
           echo"<td>"."<input type='text' name=".$size.">"."</td>";
           echo"<td>"."<input type='number' name=".$count.">"."</td>";
           echo"<td>"."<textarea rows='2' cols='30' name=".$des."></textarea>" ."</td>";
           echo"<td>"."<input type='file' name=".$file.">"."</td>";
           echo "</tr>";
       }
          ?>

        
  
    
    
    </table>
            
        </div>

    </div>

</div>


</form>
</body>
</html> 
<?php 
}else{header('location:../index.php');}  