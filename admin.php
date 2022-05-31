<?php 
session_start();
if (!isset($_SESSION['id'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: adminlogin.php');
  }

    if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['id']);
    header("location: adminlogin.php");
  }

?>
 <?php  if (isset($_SESSION['id'])) : ?>
     
     <a class="nav-link" href="admin.php?logout='1'"<?php $_SESSION['log']=1 ?> ><?php echo $_SESSION['id']; ?> </a> 
     <!-- <?php endif ?> --->

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
    <title>Home</title>

    <!--- css file link for navbar--->
    <link rel="stylesheet" href="admin.css">
    
    
     <style>
.checked {
    color: orange;
}</style>

</head>


<body>
  <script src="script.js"></script>

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
                  <?php  if (isset($_SESSION['id'])) : ?>
     
     <a class="nav-link" href="admin.php?logout='1'"<?php $_SESSION['log']=1 ?> >ID<?php echo $_SESSION['id']; ?>-Logout </a> 
     <!-- <?php endif ?> --->  
                         

      <!--- button for the navbar --->
             

              
                 
                  </ul>
          <!---search bar ---->
        </div>
      </div>
               
              
                    <div class="sidenav">
  <a href="buyers.php">Buyers</a>
  <a href="instructor.php">Instructor List</a>
  <a href="contact.php">Contact People List</a>
  
</div>

                   
             
                

            </div>
        </div>

    </nav>
    <!--- image set --->


</div>
</div>

    

<!--- icon and name set --->



  <!--- end grid view --->


<!--- end image set --->
<div class="jumbotron">
  <div id="container">


    <div class="main">

    <div class="container1" >
      <p class="p1">Videos</p>
            
            <form method="post" action="registration.php" enctype="multipart/form-data" >
                <div class="divag">
                  <div >
                    <div class="right">
                    
                     <label class="l1">Select Video :</label> 
                     <input type="file" name="file" >
                      <input type="submit" name="submit"  value="Upload"/>
                      <br>
                      <button ><a href="viewVideo.php">View</a></button>
                      <button><a href="deleteVideo.php">Delete</a></button>
                    </div>
                    
                    <label class="l1">Name of the Video :</label> <input class="form-control f1 input-sm " type="text" name="video" autocomplete="off">
                
                    <label class="l1">Category :</label> <input class="form-control f1 input-sm" type="text" name="vcategory" autocomplete="off">
                     <label class="l1">Price :</label> <input class="form-control f1 input-sm" type="text" name="vprice"  autocomplete="off">
                     <label class="comment">Details :</label>
                  <textarea class="form-control" rows="5" id="comment" name="vdetails"></textarea>
                    
                      
                     
                   

                   

                </div>
                
    </div>
  </form>
    </div>

    <div class="container1" >
      <p class="p3">Books</p>
            
            <form method="post" action="registration2.php" enctype="multipart/form-data" >
                <div class="divag">
                  <div >
                    <div class="right">
                    
                     <label class="l1">Select Book :</label> 
                     <input type="file" name="file" >
                      <input type="submit" name="submit"  value="Upload"/>
                      <br>
                      <button><a href="viewBook.php">View</a></button>
                      <button><a href="deleteBook.php">Delete</a></button>
                    </div>
                    
                    <label class="l1">Name of the Book :</label> <input class="form-control f1 input-sm " type="text" name="book" autocomplete="off">
                
                    <label class="l1">Category :</label> <input class="form-control f1 input-sm" type="text" name="bcategory" autocomplete="off">
                     <label class="l1">Price :</label> <input class="form-control f1 input-sm" type="text" name="bprice"  autocomplete="off">
                     <label class="comment">Details :</label>
                  <textarea class="form-control" rows="5" id="comment" name="bdetails"></textarea>
                     
                      
                     
                   

                   

                </div>
                
    </div>
  </form>
    </div>
        <div class="container1" >
      <p class="p4">Apparatus</p>
            
            <form method="post" action="registration3.php" enctype="multipart/form-data" >
                <div class="divag">
                  <div >
                    <div class="right">
                    
                     <label class="l1">Select Appratus :</label> 
                     <input type="file" name="file" >
                      <input type="submit" name="submit"  value="Upload"/>
                      <br>
                      <button><a href="viewApparatus.php">View</a></button>
                      <button><a href="deleteApparatus.php">Delete</a></button>
                    </div>
                    
                    <label class="l1">Name of the Apparatus :</label> <input class="form-control f1 input-sm " type="text" name="apparatus" autocomplete="off">
                
                    <label class="l1">Category :</label> <input class="form-control f1 input-sm" type="text" name="acategory" autocomplete="off">
                     <label class="l1">Price :</label> <input class="form-control f1 input-sm" type="text" name="aprice"  autocomplete="off">
                     <label class="comment">Details :</label>
                  <textarea class="form-control" rows="5" id="comment" name="adetails"></textarea>
                     
                      
                     
                   

                   

                </div>
                
    </div>
  </form>
    </div>


    </div>


      </div>
    

 <!---Link footer ---->
    
    
   
    </div>

    <div class="c2 container-fluid">
        <p class="pz">Developed By Team Work &copy; Copyright 2018</p>

    </div>

    

</body>

</html>