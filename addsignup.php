<link rel="stylesheet" type="text/css" href="signup.css">
<?php
include_once 'conn.php';
if(isset($post['upload'])){
}
$fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$psw = mysqli_real_escape_string($conn,$_POST['psw']);
$pswrepeat = mysqli_real_escape_string($conn,$_POST['pswrepeat']);





$sql = "insert into signup (fullname,email,psw,pswrepeat) values ('$fullname', '$email', '$psw', '$pswrepeat');";
mysqli_query($conn,$sql);       //*************writing to DB**************************************//

header("Location: Home.php?update=success");
?>