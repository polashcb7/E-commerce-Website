
<?php

   include_once("conn.php");
   if(isset($_REQUEST["delid"]))
   {
      
        $delid=$_REQUEST["delid"];
        $d="Delete from apparatusup where id='$delid'";
         $delquery = mysqli_query($conn,$d);
   }
   $q =  "SELECT id,name,apparatus,acategory,aprice from apparatusup";
   $query = mysqli_query($conn,$q);
   $query1 = mysqli_query($conn,$q);
   $query2 = mysqli_query($conn,$q);
   $query3 = mysqli_query($conn,$q);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--- link for icon --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- title of the page --->
    <title>Delete Apparatus</title>

    <!--- css file link for navbar--->
    
     <link rel="stylesheet" href="try1.css">
     
      <link rel="stylesheet" href="admin.css">
     <link rel="stylesheet" href="starBook.css">
     <link rel="stylesheet" href="gridApparatus1.css">

    
    <style>
.checked {
    color: orange;
}
</style>

</head>


<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fliud">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#btndata" data-toggle="collapse" aria-expanded="false">
          <span class="icon-bar"></span>
          

        </button>

                 <a class="navbar-brand" href="admin.php">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse" id="btndata">
                <ul class="nav navbar-nav">
                   
                   
                <!---   Drop down menu for the navbar --->
                   
                         
      <!--- button for the navbar --->
              

               <li class="nav-item">
                        <a class="nav-link" href="adminlogin.php">Log Out</a>
                    </li> 

                
                  </ul>
          <!---search bar ---->
              
  
                   
                   
             
                

            </div>
        </div>

    </nav>
    <!--- image set --->

     

    
    

    <!--- icon and name --->
    <div class="line">
  <div class="perpendicular ">
   <img src="tools.png" class="img-rounded" alt="Videos" width="70" height="70" >  
  </div>
  <div class="perpendicular">

    <div class="dropdown">
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: black;color:white;font-size:25px ;margin-top: 3px;">Apparatus
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
     <li><a href="adPhysics.php">Physics</a></li>
      <li><a href="adChemistry.php">Chemistry</a></li>
      <li><a href="adBiology.php">Biology</a></li>
      
      

    </ul>
  </div>


  </div>

  
  
</div>
<!--- catagory--->

  <div>
  <p style="color: black;font-size:25px ;margin-top: 3px;margin-left: 30px">Biology</p>
</div>
<hr>

<!--- icon and name set --->


  <div class="container">
        <ul>

          <?php
   


     
     while ($row=mysqli_fetch_assoc($query2))
      {
         $id2=$row['id'];
        $name2=$row['name'];
        $apparatus2=$row['apparatus'];
        $acategory2=$row['acategory'];
        $aprice2=$row['aprice'];

        if($acategory2=="Biology")
        {
       
        
        ?>
            <li> 
            <img class="image" src="apparatus/<?php echo $name2;?>" width="100%" height="60%" />
            <br>

           <div class="bottom">
           <div class="write"> <h> <?php echo $apparatus2; ?></h></div></div>
            <br>
            <div class="price"><h > <?php echo $aprice2; ?></h>
           
           <a class="btn btn-danger" style="margin-left: 5%"href="deleteApparatus.php?delid=<?php echo $id2 ?>" >Delete</a>
         
           <?php
         }
        
     }

     

 
 ?>
            
        </ul>
        
    </div>
  <div>

    
      
      

    </div>

    </div>
  
  </div>




      
      

    </div>

    </div>
  
  </div>


  



 <!---Link footer ---->
    
    
   

    <div class="c2 container-fluid">
        <p class="pz">Developed By Team Work &copy; Copyright 2018</p>

    </div>

</body>

</html>