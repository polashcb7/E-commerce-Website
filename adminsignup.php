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
    <link rel="stylesheet" href="home.css">
    
    
     <link rel="stylesheet" href="signup.css">
    
    
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
                   
                         

      <!--- button for the navbar --->
             

               <li class="nav-item">
                        <a class="nav-link" href="adminlogin.php">Log Out</a>
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
        
 <form class="modal-content" action="addadminsignup.php" name="signForm" onsubmit="return validatesignForm()" method="post" >
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      

      <label for="fullname"><b>Full Name</b></label>
      <input type="text" placeholder="Enter Your Full Name" name="fullname" >
      <br>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" >
      <br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" >
      <br>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="pswrepeat" >
      <br>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button class="b1" type="button" onclick="location.href='Home.php'"  id="cancelbtn">Cancel</button>
        <button class="b1" type="submit" id="signupbtn">Sign Up</button>
      </div>
      <p style="text-align: center;">Already have an account ? <a href="adminlogin.php" style="color:dodgerblue">Login </a>here</p>
    </div>
  </form>


    </div>

    </div>
  
  </div>



 

 <!---Link footer ---->
    
    
    

    <div class="c2 container-fluid">
        <p class="pz">Developed By Team Work &copy; Copyright 2018</p>

    </div>


</body>

</html>