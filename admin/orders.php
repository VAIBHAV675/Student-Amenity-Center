<?php
include("connection1.php");

$db= $con;
$tableName="orders_amenities";
$columns= ['name', 'mobile','address','pincode','order_id', 'product_id'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY product_id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".css/style.css">
    <link rel="stylesheet" href=".css/footer.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href=".css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Amenity Center</title>
</head>



<style>
    .in {
        width:100%;
        position:fixed;
        display:flex;
        justify-content:center;
        margin-top:250px;
        align-items:center;
    }
    form {
        position:fixed;
        width:30%;
        height:480px;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        background: #AC7088;
    }

    form input,.confirm{
        height:40px;
        width:200px;
        margin:10px;
        border-radius:5px
    }

    #buymodal{
        display:none;
    }

  
</style>
 <!-- End Navbar -->
 <div class="content" style="width :100%;height: 600px;padding-top:100px;">
        


<!-- 
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body> -->
<div class="contaainer">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead>
        <tr><th>name</th>
         <th>address</th>
         <th>pincode</th>
         <th>order_id</th>
         <th>product_id</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['address']??''; ?></td>
      <td><?php echo $data['pincode']??''; ?></td>
      <td><?php echo $data['order_id']??''; ?></td>
      <td><?php echo $data['product_id']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>

</div>
</div>


        
</div>

 <?php
include "footer.php";
?>