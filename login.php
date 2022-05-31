

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="login.js"></script>
    <!-- title of the page --->
    <title>LogIn</title>

    <!--- css file link for navbar--->
    <link rel="stylesheet" href="home.css">
    
    
     <link rel="stylesheet" href="signup.css">

</head>








<style>

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
                        <a class="nav-link" href="institutions.php">Institutions</a>
                    </li> 

               <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li> 

                <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li> 
                  </ul>
          <!---search bar ---->
               
              <li class="form-inline">  
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" ></input>
  <a  href="Books.html" ><i class="glyphicon glyphicon-search" ></i></a> 
   </li>
  
                   
                   
             
                

            </div>
        </div>

    </nav>
     </div>
   </div>
  <div class="container">
        
<div class="jumbotron">
  
  <BR><BR><BR>
     
 <form name="myForm" class="modal-content" action="login_auth.php" onsubmit="return validateForm()" method="post">
 
    <div class="container">
      <h1 style="color: #3386FF;text-align: center;">Log in</h1>
      <p style="text-align: center">Do you want to login?</p>
      

      

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" >
      <br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" >
      <br>

      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>Forgot <a href="#" style="color:dodgerblue">Password</a>?</p>

      <div class="clearfix">
        <button class="b1" type="button" onclick="location.href='Home.php'"  id="cancelbtn">Cancel</button>
        <button class="b1" type="submit" id="signupbtn">Log In</button>
      </div>
         <p style="text-align: center;">Need an account ? <a href="signup.php" style="color:dodgerblue">Sign Up</a></p>

      <meta name="google-signin-scope" content="profile email">
  
      <meta name="google-signin-client_id" content="765461772844-ikf9bpocm2cpf5e1g133suouosmd4p29.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>


    </div>
  </form>
  


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