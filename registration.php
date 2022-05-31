<?php

include_once("conn.php");
 
if(isset($_POST['submit']))
{
    

     $name = $_FILES['file']['name'];
     $temp = $_FILES['file']['tmp_name'];
     

     move_uploaded_file($temp,"videos/".$name);
     $video = $_POST['video'];
     $vcategory = $_POST['vcategory'];

     $vprice = $_POST['vprice'];
      $vdetails = $_POST['vdetails'];
     
    $q =  "INSERT INTO videoup(id,name,video,vcategory,vprice,vdetails)VALUES('','$name','$video','$vcategory','$vprice','$vdetails')";
   
  

     if(mysqli_query($conn,$q))
     {
        echo "Submitted to database";
     }
   


}
 ?>