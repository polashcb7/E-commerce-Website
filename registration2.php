<?php

include_once("conn.php");
 
if(isset($_POST['submit']))
{
    

     $name = $_FILES['file']['name'];
     $temp = $_FILES['file']['tmp_name'];
     

     move_uploaded_file($temp,"books/".$name);
     $book = $_POST['book'];
     $bcategory = $_POST['bcategory'];

     $bprice = $_POST['bprice'];
     $bdetails = $_POST['bdetails'];
      
    $q =  "INSERT INTO bookup(id,name,book,bcategory,bprice,bdetails)VALUES('','$name','$book','$bcategory','$bprice','$bdetails')";
   
  

     if(mysqli_query($conn,$q))
     {
        echo "Submitted to database";
     }
   


}
 ?>