
<?php

   include_once("conn.php");
   $q =  "SELECT name,video,vcategory,vprice from videoup";
   $query = mysqli_query($conn,$q);
   $query1 = mysqli_query($conn,$q);
   $query2 = mysqli_query($conn,$q);
    $query3 = mysqli_query($conn,$q);
   $query4 = mysqli_query($conn,$q);
    $query5 = mysqli_query($conn,$q);
   $query6 = mysqli_query($conn,$q);
   $query7 = mysqli_query($conn,$q);
    $query8 = mysqli_query($conn,$q);
   $query9 = mysqli_query($conn,$q);
    $query10 = mysqli_query($conn,$q);
   $query11 = mysqli_query($conn,$q);
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
    <title>Admin Video</title>

    <!--- css file link for navbar--->
    
     <link rel="stylesheet" href="try1.css">
     <link rel="stylesheet" href="home.css">
     <link rel="stylesheet" href="admin2.css">
     <link rel="stylesheet" href="starBook.css">
     <link rel="stylesheet" href="gridView1.css">

    


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
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: black;color:white;font-size:25px ;margin-top: 3px;position: relative;">Videos
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="vvPhysics.php">Physics</a></li>
      <li><a href="vvChemistry.php">Chemistry</a></li>
      <li><a href="vvBiology.php">Biology</a></li>
      <li><a href="vvMathematics.php">Mathematics</a></li>
      

    </ul>
  </div>


  </div>

  
  
</div>
<!--- catagory--->

  <div>
  <p style="color: black;font-size:25px ;margin-top: 3px;margin-left: 30px">Chemistry</p>
</div>
<hr>

<!--- icon and name set --->


  <div class="container">
        <ul>

          <?php
   


     
     while ($row=mysqli_fetch_assoc($query1))
      {
        
        $name1=$row['name'];
        $video1=$row['video'];
        $vcategory1=$row['vcategory'];
        $vprice1=$row['vprice'];

        if($vcategory1=="Chemistry")
        {
       
        
        ?>
            <li> 
              <div class="video">
            <?php echo "<video width='100%' controls><source src='videos/".$name1."'  type='video/webm'></video>"?></div>
            <br>

            <div class="bottom">
           <div class="write"> <h> <?php echo $video1; ?></h></div></div>
            <br>
            <div class="price"><h > <?php echo $vprice1; ?></h>
           
           <button type="button" class="btn btn-success" style="margin-left: 5%" >Buy</button>
    <span class="fa fa-star checked" "></span> </div>
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