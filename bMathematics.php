<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
  }
?>



   <?php  
 $connect = mysqli_connect("localhost", "root", "", "education");  
 $query = "SELECT * FROM bookup";  
 $result = mysqli_query($connect, $query); 
  $result1 = mysqli_query($connect, $query); 
  $result2 = mysqli_query($connect, $query);
  $result3 = mysqli_query($connect, $query); 
 

    
   $q =  "SELECT id ,name,book,bcategory,bprice from bookup";
  
 

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
    <title>Mathematics Book</title>

    <!--- css file link for navbar--->
    
      <link rel="stylesheet" href="try1.css">
     <link rel="stylesheet" href="home.css">
     <link rel="stylesheet" href="starBook.css">
     <link rel="stylesheet" href="gridBook2.css">
      <link rel="stylesheet" href="try2.css">

    
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
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>

        </button>

                <a class="navbar-brand" href="Home.php">E-learner</a>
            </div>
            <div class="collapse navbar-collapse" id="btndata">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.php">Home</a>
                    </li>
                   
                <!---   Drop down menu for the navbar --->
                   
                         <li class="dropdown"  ><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;" >Resources <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Videos.php">Videos</a></li>
          <li><a href="Books.php">Books</a></li>
          <li><a href="Apparatus.php">Apparatus</a></li>
          
        </ul>
      </li>

      <!--- button for the navbar --->
              <li class="nav-item">
                        <a class="nav-link" href="institutions.php">Institutions</a>
                    </li> 

              <li class="nav-item">
  

     <?php  if (isset($_SESSION['email'])) : ?>
     
     <a class="nav-link" href="bMathematics.php?logout='1'"<?php $_SESSION['log']=1 ?> ><?php echo $_SESSION['email']; ?> </a> 
     <!-- <?php endif ?> --->
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
     <img src="books.png" class="img-rounded" alt="Videos" width="50" height="70" > 
  </div>
  <div class="perpendicular">

    <div class="dropdown">
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: black;color:white;font-size:25px ;margin-top: 3px;">Books
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="bPhysics.php">Physics</a></li>
      <li><a href="bChemistry.php">Chemistry</a></li>
      <li><a href="bBiology.php">Biology</a></li>
       <li><a href="bMathematics.php">Mathematics</a></li>
      

    </ul>
  </div>


  </div>

  
  
</div>
<!--- catagory--->

  <div>
  <p style="color: black;font-size:25px ;margin-top: 3px;margin-left: 30px">Mathematics</p>
</div>
<hr>

<!--- icon and name set --->


  <div class="container">
    <div class="containers" >  
                <h3 align="center"></h3>  
                <br />  
                
                      
                      <ul>      
                                
                            
                          <?php  
                          while($row = mysqli_fetch_assoc($result3))  
                          {  
                            
                            if($row["bcategory"]=="Mathematics")
                            {

                              ?>
            <li> 
             
             <img class="image" src="books/<?php echo $row['name'];?>" width="100%" height="60%" />

            <br>

           <div class="bottom">

           <div class="write">  <h style="width:auto;"> <?php echo $row['book']; ?></h></div>

        

         



         </div>
          <br>
            <div class="price"><h > <?php echo $row['bprice']; ?></h>
           
          <form method="get" action="buy.php">

<?php
$var_value =$row['bprice'];
?>   
<input type="hidden" name=varname value="<?php echo $var_value; ?>" class="btn btn-success" style="margin-left: 10px" />
 <button type="submit" id="<?php echo $row["id"]; ?>" name=varname value="<?php echo $var_value; ?>" class="btn btn-info btn-xs view_data" style="margin-left: 5%"  >Buy</button>
</form>
    </div>
             </li>
         
           <?php
         }
        
     }
   
     

 
 ?>
            
        </ul>
                              
                      
                </div>
    
      </div>
    </div>
  <div>

    
      
      

    </div>

    </div>
  
  </div>




      
      

    </div>

    </div>
  
  </div>



  



 <!---Link footer ---->
    
    
    <div class="c1 container-fluid">
        <a  href="JoinUs.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px ;margin-top: 30px">Join Us</button></a>
        <a  href="About.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px ;margin-top: 30px;" id="about">About</button></a>
        <a  href="ContactUs.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px;float: right; margin-top: 30px">Contact Us</button></a>

    </div>

    <div class="c2 container-fluid">
        <p class="pz">Developed By Team Work &copy; Copyright 2018</p>

    </div>

</body>
