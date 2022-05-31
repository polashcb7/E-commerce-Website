




<link rel="stylesheet" type="text/css" href="index.css">
<?php
// Always start this first
session_start();
include_once 'conn.php';
if(isset($post['upload'])){
}
$temp=0;
$email = mysqli_real_escape_string($conn,$_POST['email']);
$psw = mysqli_real_escape_string($conn,$_POST['psw']);
$temp = 0;
$sq="select * from signup where email='$email' and psw='$psw';"; 

$result = mysqli_query($conn,$sq);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    if($row['email']===$email and $row['psw']===$psw){
  mysqli_query($conn,$sql); 

 $_SESSION['email'] = $email;
 $_SESSION['success'] = "You are now logged in";


  header("Location: Books.php?update=success");
}
else  {
      $temp++;
     } 
  }

 
    
}

echo "<h1>No Match Found Try Using Correct Username Password</h1>";
?>


