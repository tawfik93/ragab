<meta charset="utf-8">
<body>
 

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $date=$_POST['date'];


session_start();



if ($_SESSION['group_id']=='1'){

  
  $name=$_SESSION['username'];
  $position=$_SESSION['position'];
?><pre>
<h4>UserName : <?php echo $name;?>      <?php echo $position;?>                                      <a href="../log/logout.php">logout</a> </h4></pre>
<?php
include 'conn.php';
?>
<h4><pre><a href="../log/nav.php">member</a>    <a href="position.php">position</a>     <a href="product.php">product</a>    <a href="php.php">order</a>    <a href="uporder.php">updated order</a></h4></pre>
<form action="productsql.php" method="post"></form>
    
        
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>order</title>
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
    
    <form action="p.php" method="get" >
      <pre>
   <label>date</label> <input type='date' name='date' value="<?php echo $date; ?>">
  </pre>
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
            <a href="#special" class="nav-link">special</a>
        </li>

        
       
    </ul>
    </form>



    <!-- .....................................................................
...............................................................................
............................................................................................
........................................TORTA...................... -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="torta">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                      
                      <th>brunches</th>
                      <th>item</th>
                      <th>count</th>
                      <th>time</th>
                </tr>
              </thead>
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM updata WHERE idname= 1 AND date='$date' ");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 

                foreach ($rows as $row){
              echo "<tr>";
              echo "<td>".$row['brunches']."</td>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['count']."</td>";
              echo "<td>".$row['time']."</td>";
                

            }?>
    </table>
    
  
    </div>
<!-- ................................................................................
..................................................................................
................................................................................
.........................................................................GATO -->
        
        <div class="tab-pane fade" id="gato">
            
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                      
                      <th>brunches</th>
                      <th>item</th>
                      <th>count</th>
                      <th>time</th>
                </tr>
              </thead>
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM updata WHERE idname= 2 AND date='$date'");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 

                foreach ($rows as $row){
              echo "<tr>";
              echo "<td>".$row['brunches']."</td>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['count']."</td>";
              echo "<td>".$row['time']."</td>";
                

            }?>
    </table>
           </div>
        <!-- ........................................................................
....................................................................
....................................................................
..................................................................BETYFOUR -->
        <div class="tab-pane fade" id="betyfour">
            
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                      
                      <th>brunches</th>
                      <th>item</th>
                      <th>count</th>
                      <th>time</th>
                </tr>
              </thead>
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM updata WHERE idname= 3 AND date='$date'");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 

                foreach ($rows as $row){
              echo "<tr>";
              echo "<td>".$row['brunches']."</td>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['count']."</td>";
              echo "<td>".$row['time']."</td>";
                

            }?>
    </table>
    
        </div>
        <!-- ...................................................................
.................................................................................
.....................................................................................
........................................SALIZONE ..............-->
        <div class="tab-pane fade" id="salizon">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                      
                      <th>brunches</th>
                      <th>item</th>
                      <th>count</th>
                      <th>time</th>
                </tr>
              </thead>
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM updata WHERE idname= 4 AND date='$date'");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 

                foreach ($rows as $row){
              echo "<tr>";
              echo "<td>".$row['brunches']."</td>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['count']."</td>";
              echo "<td>".$row['time']."</td>";
                

            }?>
    </table>
     <p></p>
   
        </div>
        <!-- ............................................................
......................................................................................
................................................................................
........................................CHOCOLAT-->
        <div class="tab-pane fade" id="chocolata">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                      
                      <th>brunches</th>
                      <th>item</th>
                      <th>count</th>
                      <th>time</th>
                </tr>
              </thead>
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM updata WHERE idname= 5 AND date='$date'");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 

                foreach ($rows as $row){
              echo "<tr>";
              echo "<td>".$row['brunches']."</td>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['count']."</td>";
              echo "<td>".$row['time']."</td>";
                

            }?>
    </table>
    
   
        </div>

        <!-- ................................................................................
..................................................................................
................................................................................
.........................................................................SHARQY -->
        
        <div class="tab-pane fade" id="sharqy">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                      
                      <th>brunches</th>
                      <th>item</th>
                      <th>count</th>
                      <th>time</th>
                </tr>
              </thead>
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM updata WHERE idname= 6 AND date='$date'");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 

                foreach ($rows as $row){
              echo "<tr>";
              echo "<td>".$row['brunches']."</td>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['count']."</td>";
              echo "<td>".$row['time']."</td>";
                

            }?>
    </table>
    
    
        </div>
 <!------------------------------------------------------------------------
  -------------------------------------------------------------------------
  -----------------------special-------------------------------------------
  -------------------------------------------------------------------------
  ------------------------------------------------------------------------->
    <div class="tab-pane fade" id="special">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                      <th>brunches</th>
                      <th>size</th>
                      <th>count</th>
                      <th>describe</th>
                      <th>imge</th>
                      <th>time</th>
                </tr>
              </thead>
 <?php 
  $stmt3 = $conn->prepare("SELECT * FROM upspecial WHERE date='$date'");
  $stmt3->execute();
  $rows = $stmt3->fetchAll(); 

                foreach ($rows as $row){
              echo "<tr>";
              echo "<td>".$row['brunches']."</td>";
              echo "<td>".$row['size']."</td>";
              echo "<td>".$row['count']."</td>";
              echo "<td>".$row['describe']."</td>";
              echo "<td>";
              if ($row['imge'] !="") {
                
              
               ?>
              <img style="width: 100px; height: 100px;" src="data:image/png;base64,<?php echo base64_encode($row['imge']);?>">
              <?php
            }else{echo "no image";}
              echo "</td>";
              echo "<td>".$row['time']."</td>";
              echo "<tr>";
                

            }?>
    </table>
    
   
        </div>
            
        </div>

    </div>

</div>


</form>

</body>
</html> 
<?php

}else header('location:../index.php'); 
  }else{header('location:up.php');}