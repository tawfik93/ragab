<meta charset="utf-8">
<body>

<?php
session_start();
if ($_SESSION['group_id']=='1'){

 include 'conn.php' ;


$name=$_SESSION['username'];
$position=$_SESSION['position'];
?><pre>
<h4>UserName : <?php echo $name;?>      <?php echo $position;?>                                         <a href="../log/logout.php">logout</a> </h4></pre>
<h4><pre><a href="../log/nav.php">member</a>    <a href="position.php">position</a>     <a href="product.php">product</a>    <a href="php.php">order</a>    </h4></pre>
<form action="productsql.php" method="post">
    
        
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Product</title>
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

        
       
    </ul>
    </form>



    <!-- .....................................................................
...............................................................................
............................................................................................
........................................TORTA...................... -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="torta">
            <table>
                <P></P>
               id product 1 
               <input type="hidden"  value=1 >

 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=1 ");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 
  $count = $stmt3->rowCount();
  echo 'total'." ". $count;            
 foreach ($rows as $row){

             $g=$row['name'];
                echo "<tr>";
                echo "<td>"."<input type='text' disabled value=".$row['vip'] .">" ."</td>";
               
                echo "<td>"."<input type='text'  name=".$g." value=".$row['name'] .">" ."</td>";
            }?>

    </table>
    <p></p>
    <form action="productsql.php" method="get">
    <input type="text" name='t1' placeholder="new product">
    <input type="submit" value="insert" class="btn btn-success ">
    </form>
    </div>
<!-- ................................................................................
..................................................................................
................................................................................
.........................................................................GATO -->
        
        <div class="tab-pane fade" id="gato">
            
            <table border="0px">
                <P></P>
               id product 2 
               <input type="hidden"  value=2 >

 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id= 2");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 
  $count = $stmt3->rowCount();
 echo 'total'." ". $count;

           
           
            foreach ($rows as $row){
                $g=$row['name'];
                
                echo "<tr>";
                echo "<td>"."<input type='text' disabled value=".$row['vip'] .">" ."</td>";
                echo "<td>"."<input type='text'  name=".$g." value=".$row['name'] .">" ."</td>";
                

            }?>
    </table>
     <p></p>
    <form action="productsql.php" method="get">
    <input type="text" name='t2' placeholder="new product">
    <input type="submit" value="insert" class="btn btn-success ">
    </form>

           </div>
        <!-- ........................................................................
....................................................................
....................................................................
..................................................................BETYFOUR -->
        <div class="tab-pane fade" id="betyfour">
            
            <table border="0px">
                <P></P>
               id product 3 
               <input type="hidden"  value=3 >

 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=3");
  $stmt3->execute();
  $rows = $stmt3->fetchAll();
  $count = $stmt3->rowCount();
 echo 'total'." ". $count;  
            foreach ($rows as $row){
                $b=$row['name'];
                echo "<tr>";
                echo "<td>"."<input type='text' disabled value=".$row['vip'] .">" ."</td>";
                echo "<td>"."<input type='text'  name=".$b." value=".$row['name'] .">" ."</td>";
              echo "</tr>";


            }?>
    </table>
    <p></p>
    <form action="productsql.php" method="get">
    <input type="text" name='t3' placeholder="new product">
    <input type="submit" value="insert" class="btn btn-success ">
    </form>
        </div>
        <!-- ...................................................................
.................................................................................
.....................................................................................
........................................SALIZONE ..............-->
        <div class="tab-pane fade" id="salizon">
            <table border="0px">
                <P></P>
               id product 4 
               <input type="hidden"  value=4 >

 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=4");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 
  $count = $stmt3->rowCount();
  echo 'total'." ". $count;
            foreach ($rows as $row){
                $s=$row['name'];
                echo "<tr>";

                echo "<td>"."<input type='text' disabled value=".$row['vip'] .">" ."</td>";
                echo "<td>"."<input type='text' name=".$s." value=".$row['name'] .">" ."</td>";
       echo "</tr>";
            }?>
    </table>
     <p></p>
    <form action="productsql.php" method="get">
    <input type="text" name='t4' placeholder="new product">
    <input type="submit" value="insert" class="btn btn-success ">
    </form>
        </div>
        <!-- ............................................................
......................................................................................
................................................................................
........................................CHOCOLAT -->
        <div class="tab-pane fade" id="chocolata">
            <table border="0px">
                <P></P>
               id product 5 
               <input type="hidden"  value=5 >

 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=5");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 
  $count = $stmt3->rowCount();
  echo 'total'." ". $count; 
            foreach ($rows as $row){
                $ch=$row['name'];
                echo "<tr>";
                echo "<td>"."<input type='text' disabled value=".$row['vip'] .">" ."</td>";
                echo "<td>"."<input type='text' name=".$ch." value=".$row['name'] .">" ."</td>";
                echo "</tr>";
            }?>
    </table>
     <p></p>
    <form action="productsql.php" method="get">
    <input type="text" name='t5' placeholder="new product">
    <input type="submit" value="insert" class="btn btn-success ">
    </form>
        </div>

        <!-- ................................................................................
..................................................................................
................................................................................
.........................................................................SHARQY -->
        
        <div class="tab-pane fade" id="sharqy">
            <table border="0px">
                <P></P>
               id product 6 
               <input type="hidden" value=6 >

 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM complete_product WHERE id=6");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 
  $count = $stmt3->rowCount();
 echo 'total'." ". $count;
            foreach ($rows as $row){
                $sh=$row['name'];
                echo "<tr>";
                echo "<td>"."<input type='text' disabled value=".$row['vip'] .">" ."</td>";
                echo "<td>"."<input type='text' name=".$sh." value=".$row['name'] .">" ."</td>";
                echo "</tr>";
                
            }?>
    </table>
     <p></p>
    <form action="productsql.php" method="get">
    <input type="text" name='t6' placeholder="new product">
    <input type="submit" value="insert" class="btn btn-success ">
    </form>
        </div>
 
   
            
        </div>

    </div>

</div>


</form>
<form action="productsql.php" method="post">
   
    <input type="number" name="vip" placeholder="id product">

    <input type="text" name="name" placeholder="edit product">
    <input type="submit" value="Edit" class="btn btn-success"><br><br>
    <input type="number" name="vip1" placeholder="id product">
    <input type="submit" value="delet" class="btn btn-danger">
</form>
</body>
</html> 
<?php 
}else{header('location:../index.php');}  