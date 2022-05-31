<?php

include_once("conn.php");
 
if(isset($_POST['submit']))
{
    

     $name = $_FILES['file']['name'];
     $temp = $_FILES['file']['tmp_name'];
     

     move_uploaded_file($temp,"apparatus/".$name);
     $apparatus = $_POST['apparatus'];
     $acategory = $_POST['acategory'];

     $aprice = $_POST['aprice'];
      $adetails = $_POST['adetails'];
    $q =  "INSERT INTO apparatusup(id,name,apparatus,acategory,aprice,adetails)VALUES('','$name','$apparatus','$acategory','$aprice','$adetails')";
   
  

     if(mysqli_query($conn,$q))
     {
        echo "Submitted to database";
     }
   


}
 ?>