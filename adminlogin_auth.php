




<link rel="stylesheet" type="text/css" href="index.css">
<?php
// Always start this first
session_start();
include_once 'conn.php';
if(isset($post['upload'])){
}
$temp=0;
$id = mysqli_real_escape_string($conn,$_POST['id']);
$psw = mysqli_real_escape_string($conn,$_POST['psw']);
$temp = 0;
$sq="select * from adminlogin where id='$id' and psw='$psw';"; 

$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['id']===$id and $row['psw']===$psw){
  mysqli_query($conn,$sql); 

 $_SESSION['id'] = $id;
 $_SESSION['success'] = "You are now logged in";


  header("Location: admin.php?update=success");
}
else  {
      $temp++;
     } 
  }

 
    
}

echo "<h1>No Match Found Try Using Admin Username Password</h1>";
?>


