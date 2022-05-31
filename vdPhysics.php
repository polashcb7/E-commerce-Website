
<?php

   include_once("conn.php");
   if(isset($_REQUEST["delid"]))
   {
      
        $delid=$_REQUEST["delid"];
        $d="Delete from videoup where id='$delid'";
         $delquery = mysqli_query($conn,$d);
   }
   $q =  "SELECT id,name,video,vcategory,vprice from videoup";
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
    <title>Delete Video</title>

    <!--- css file link for navbar--->
   
     <link rel="stylesheet" href="try1.css">
     
     <link rel="stylesheet" href="admin.css">
     <link rel="stylesheet" href="starBook.css">
     <link rel="stylesheet" href="gridView1.css">

    
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
    <img src="videos.png" class="img-rounded" alt="Videos" width="50" height="50" >  
  </div>
  <div class="perpendicular">

    <div class="dropdown">
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: black;color:white;font-size:25px ;margin-top: 3px;">Videos
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="vdPhysics.php">Physics</a></li>
      <li><a href="vdChemistry.php">Chemistry</a></li>
      <li><a href="vdBiology.php">Biology</a></li>
      <li><a href="vdMathematics.php">Mathematics</a></li>
      

    </ul>
  </div>


  </div>

  
  
</div>
<!--- catagory--->
<div>
  <p style="color: black;font-size:25px ;margin-top: 3px;margin-left: 30px">Physics</p>
</div>
<hr>

<!--- icon and name set --->



  <!--- end grid view --->

<!--- catagory--->

<div class="container">
        <ul>

          <?php
   


     
     while ($row=mysqli_fetch_assoc($query))
      {
        $id=$row['id'];
        $name=$row['name'];
        $video=$row['video'];
        $vcategory=$row['vcategory'];
        $vprice=$row['vprice'];
        if($vcategory=="Physics")
        {
       
        
        ?>
            <li> 
              <div class="video">
            <?php echo "<video width='100%' controls><source src='videos/".$name."'  type='video/webm'></video>"?></div>
            

           <div class="bottom">
           <div class="write"> <h> <?php echo $video; ?></h></div></div>
            <br>
            <div class="price"><h > <?php echo $vprice; ?></h>
           
          <a class="btn btn-danger" style="margin-left: 5%"href="deleteVideo.php?delid=<?php echo $id ?>" >Delete</a>
    </span> </div>
             </li>
         
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