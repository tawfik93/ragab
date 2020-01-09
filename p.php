
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="../jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php 
if ($_SERVER['REQUEST_METHOD']=='GET'){
$date=$_GET['date'];
include 'conn.php';?>

<html>
<head>
<title>Export Excel</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script type="text/javascript">
function exportToExcel(tableID, filename = ''){
    var downloadurl;
    var dataFileType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'export_excel_data.xls';
    
    // Create download link element
    downloadurl = document.createElement("a");
    
    document.body.appendChild(downloadurl);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTMLData], {
            type: dataFileType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;
    
        // Setting the file name
        downloadurl.download = filename;
        
        //triggering the function
        downloadurl.click();
    }
}
 
</script>
</head>
<body>
  
<div class="container">
  
  <form action="php.php" method="POST" >
       <label>date</label> <input type='date' name='date' value="<?php echo $date; ?>">
       <input type="button" class="btn btn-primary" value="back!" onclick="history.back()">
       <button onclick="exportToExcel('tblexportData', 'order')" class="btn btn-success">Export Excel File</button>

   </form>

<table id="tblexportData" class="table table-hover">

  <thead class="table-dark">
  <tr>
    <th>id_brunches</th>
    <th>brunches</th>
    <th>id_item</th>
    <th>item</th>
    <th>count</th>
    <th>time</th>

  </tr>
</thead>
  <?php

$stmt = $conn->prepare("SELECT * FROM `orderr` WHERE date='$date'");
$stmt->execute();
$rows = $stmt->fetchAll(); 
 foreach ($rows as $row) {

                            echo "<tr>".
                             "<td>".$row['idprun']."</td>".
                             "<td>".$row['brunches']."</td>".
                             "<td>".$row['itemid']."</td>".
                             "<td>".$row['name']."</td>".
                             "<td>".$row['count']."</td>".
                             "<td>".$row['time']."</td>";
                             "<tr>";                           
                          } 

 ?>

 </tbody>
</table>
 

</div>
</body>
</html>
<?php
}else header('location:../index.php'); ?>