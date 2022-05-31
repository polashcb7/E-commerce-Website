<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- title of the page --->
    <title>Join Us</title>

    <!--- css file link for navbar--->
    <link rel="stylesheet" href="home.css">
    
    
     <link rel="stylesheet" href="joinus.css">
     <link rel="stylesheet" href="try2.css">

</head>


<style>
    body{
        margin-top: 80px;
    }
</style>


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
                        <a class="nav-link" href="Institutions.php">Institutions</a>
                    </li> 

               <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li> 

                <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li> 
                  </ul>
          <!---search bar ---->
               
              
  
                   
                   
             
                

            </div>
        </div>

    </nav>
     </div>
   </div>
  <div class="container">
        
<div class="jumbotron">
  
  <BR><BR><BR>
     <?php include('errors.php'); ?>   
 <form class="modal-content" action="JoinUs.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <h3 style="text-align: center;">Join the E-Learner Family!</h3>
      <p style="text-align: center">Basic Information Form</p>
      

      <label for="fullname"><b>First Name</b></label>
      <input type="text" value="<?php echo $firstname; ?>" placeholder="" name="firstname" >
      <br>
      <label for="fullname"><b>Middle Name</b></label>
      <input type="text" value="<?php echo $middlename; ?>" placeholder="" name="middlename" >
      <br>
      <label for="fullname"><b>Last Name</b></label>
      <input type="text" value="<?php echo $lastname; ?>" placeholder="" name="lastname" >
      <br>

      <br>
      <label for="fullname"><b> Current Profession: </b></label>
      <input type="text" placeholder="" value="<?php echo $profession; ?>" name="profession" >
      <br>

      <br>
      <label for="fullname"><b> Institution/Organisation: </b></label>
      <input type="text" placeholder="" value="<?php echo $organisation; ?>" name="organisation" >
      <br>
      <label for="fullname"><b> Contact Number: </b></label>
      <br>
      <input type="tel" placeholder="" value="<?php echo $phone; ?>" name="phone" >
      <br>
      <br>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" value="<?php echo $email; ?>" name="email" >
      <br>
      <label for="fullname"><b>  Fields of interest: </b></label>
      <br>
      <input type="checkbox" value="Physics" name="Checkbox[]"> Physics <br>
      <input type="checkbox" value="Chemistry" name="Checkbox[]"> Chemistry <br>
      <input type="checkbox" value="Biology" name="Checkbox[]"> Biology <br>
      <input type="checkbox" value="Bangla" name="Checkbox[]"> Bangla Language <br>
      <input type="checkbox" value="English" name="Checkbox[]"> English Language <br>
      <input type="checkbox" value="Mathematics" name="Checkbox[]"> Mathematics <br>
      <input type="checkbox" value="Business Studies" name="Checkbox[]"> Business Studies <br>
      <input type="checkbox" value="Computer Science" name="Checkbox[]"> Computer Science <br>

      

    <p> Please attach your CV/Resume: <input type="file" name="cvfile"></p><br>
        

      <div class="clearfix">
        
        <button class="b1" type="submit" name="Join_user">Submit</button>
      </div>
    </div>
  </form>


    </div>

    </div>
  
  </div>



 

 <!---Link footer ---->
    
    
    <div class="c1 container-fluid">
        <a  href="JoinUs.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px ;margin-top: 30px">Join Us</button></a>
        <a  href="About.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px ;margin-left: 38%;margin-top: 30px;" id="about">About</button></a>
        <a  href="ContactUs.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px;float: right; margin-top: 30px">Contact Us</button></a>

    </div>

    <div class="c2 container-fluid">
        <p class="pz">Developed By Team Work &copy; Copyright 2018</p>

    </div>


</body>

</html>