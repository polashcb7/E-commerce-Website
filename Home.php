<?php 
  session_start(); 

  
?>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "education");  
 $query = "SELECT * FROM videoup";  
 $result = mysqli_query($connect, $query); 
  

    
   $q =  "SELECT id ,name,video,vcategory,vprice from videoup";
   $query1 = "SELECT * FROM bookup";  
 $result1 = mysqli_query($connect, $query1); 
  
 

    
   $q1 =  "SELECT id ,name,book,bcategory,bprice from bookup";

   $query2 = "SELECT * FROM apparatusup";  
 $result2 = mysqli_query($connect, $query2); 
  $q2 =  "SELECT id ,name,apparatus,acategory,aprice from apparatusup";
  
 

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
    <title>Home</title>

    <!--- css file link for navbar--->
    <link rel="stylesheet" href="home.css">
   
    <link rel="stylesheet" href="try1.css">
        <link rel="stylesheet" href="grid.css">
       
      <link rel="stylesheet" href="try2.css">
      
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

                   <?php  if (isset($_SESSION['email'])) : ?>
               <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li> 

                <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                    <?php endif; ?>

                  </ul>
          <!---search bar ---->
               
              
                   
                   
             
                

            </div>
        </div>

    </nav>
    <!--- image set --->

     

    <img class="im1 img-responsive" src="Back.jpg" >
    

    <!--- icon and name --->
    <div class="line">
  <div class="perpendicular ">
    <img src="videos.png" class="img-rounded" alt="Videos" width="50" height="50" > 
  </div>
  <div class="perpendicular">

    <a  href="signup.php" ><button onclick="myfunction()" type="button" class="btn btn-link" style="color: black;font-size:25px ;margin-top: 3px;">Videos</button></a>


  </div>

  
  
</div>
</div>

<!--- icon and name set --->

<div class="container">

<div class="containers" >  
                <h3 align="center"></h3>  
                <br />  
                
                      
                      <ul>      
                                
                            
                          <?php  
                          while($row = mysqli_fetch_assoc($result))  
                          {  
                            
                            if($row["vcategory"]=="Home")
                            {

                              ?>
            <li> 
              <div class="video">
            <?php echo "<video width='100%' controls><source src='videos/". $row["name"]."'  type='video/webm'></video>"?></div>

            <br>

           <div class="bottom">

           <div class="write">  <h style="width:auto;"> <?php echo $row['video']; ?></h></div>

        

         



         </div>
          <br>
            <div class="price"><h > <?php echo $row['vprice']; ?></h>
           
            <form method="get" action="buy.php">

<?php
$var_value =$row['vprice'];
?>   
<input type="hidden" name=varname value="<?php echo $var_value; ?>" class="btn btn-success" style="margin-left: 10px" />
 <button type="submit" id="<?php echo $row["id"]; ?>" name=varname value="<?php echo $var_value; ?>" class="btn btn-info btn-xs view_data" style="margin-left: 5%"  >Buy</button>
</form> </div>
             </li>
         
           <?php
         }
        
     }
   
     

 
 ?>
            
        </ul>
                              
                      
                </div>  
           </div> 


    
    </div>



  </div>
  </div>
  </div>

  <!--- end grid view --->


  <div class="line">
  <div class="perpendicular ">
    <img src="books.png" class="img-rounded" alt="Videos" width="50" height="70" > 
  </div>
  <div class="perpendicular">

    <a  href="signup.php" ><button type="button" class="btn btn-link" onclick="myfunction()" style="color: black;font-size:25px ;margin-top: 3px;">Books</button></a>


  </div>
</div>

<!--- end image set --->
<div class="book">

<div class="containers" >  
                <h3 align="center"></h3>  
                <br />  
                
                      
                      <ul>      
                                
                            
                          <?php  
                          while($row = mysqli_fetch_assoc($result1))  
                          {  
                            
                            if($row["bcategory"]=="Home")
                            {

                              ?>
            <li> 
             
             <img class="image" src="books/<?php echo $row['name'];?>" width="100%" height="60%" />

            <br>

           <div class="bottom">

           <div class="write">  <h style="width:auto;" > <?php echo $row['book']; ?></h></div>

        

         



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



  </div>
  </div>
  </div>
  <!--- end grid view --->
<div class="line">
  <div class="perpendicular ">
    <img src="tools.png" class="img-rounded" alt="Videos" width="70" height="70" > 
  </div>
  <div class="perpendicular">

    <a  href="signup.php" ><button type="button" onclick="myfunction()" class="btn btn-link" style="color: black;font-size:25px ;margin-top: 3px;">Apparatus</button></a>


  </div>
</div>
<!--- end image set --->

<div class="app">
       <div class="containers" >  
                <h3 align="center"></h3>  
                <br />  
                
                      
                      <ul>      
                                
                            
                          <?php  
                          while($row = mysqli_fetch_assoc($result2))  
                          {  
                            
                            if($row["acategory"]=="Home")
                            {

                              ?>
            <li> 
             
             <img class="image" src="apparatus/<?php echo $row['name'];?>" width="100%" height="60%" />

            <br>

           <div class="bottom">

           <div class="write">  <h style="width:auto;"> <?php echo $row['apparatus']; ?></h></div>

        

         



         </div>
          <br>
            <div class="price"><h  > <?php echo $row['aprice']; ?></h>
           
           <form method="get" action="buy.php">

<?php
$var_value =$row['aprice'];
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
  </div>
  </div>
  </div>

 <!---Link footer ---->
    
    
    <div class="c1 container-fluid">
        <a  href="JoinUs.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px ;margin-top: 30px">Join Us</button></a>
        <a  href="About.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px ;margin-left: 38%;margin-top: 30px;">About</button></a>
        <a  href="ContactUs.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px;float: right; margin-top: 30px">Contact Us</button></a>

    </div>

    <div class="c2 container-fluid">
        <p class="pz">Developed By Team Work &copy; Copyright 2018</p>

    </div>

</body>

</html>