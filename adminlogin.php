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
     
 <form name="myForm" class="modal-content" action="adminlogin_auth.php" onsubmit="return validateForm()" method="post">
 
    <div class="container">
      <h1 style="color: #3386FF;text-align: center;">Log in</h1>
      <p style="text-align: center">Do you want to login?</p>
      

      

      <label for="email"><b>id</b></label>
      <input type="text" placeholder="Enter id" name="id" >
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