<link rel="stylesheet" type="text/css" href="signup.css">
<?php
include_once 'conn.php';
if(isset($post['upload'])){
}
$fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$phone = mysqli_real_escape_string($conn,$_POST['phone']);
$card_number = mysqli_real_escape_string($conn,$_POST['card_number']);
$varname = mysqli_real_escape_string($conn,$_POST['varname']);






$sql = "insert into buy (fullname,email,phone,card_number,varname) values ('$fullname', '$email', '$phone', '$card_number','$varname');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

header("Location: Books.php?update=success");
?>