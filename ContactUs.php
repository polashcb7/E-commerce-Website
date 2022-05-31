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
    <title>Contact Us</title>

    <!--- css file link for navbar--->
    <link rel="stylesheet" href="home.css">
     <link rel="stylesheet" href="icon.css">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="try2.css">


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

                <a class="navbar-brand" href="Home.html">E-learner</a>
            </div>
            <div class="collapse navbar-collapse" id="btndata">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="Home.html">Home</a>
                    </li>
                   
                <!---   Drop down menu for the navbar --->
                   
                         <li class="dropdown"  ><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;" >Resources <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Videos.html">Videos</a></li>
          <li><a href="Books.html">Books</a></li>
          <li><a href="Apparatus.html">Apparatus</a></li>
          
        </ul>
      </li>

      <!--- button for the navbar --->
              <li class="nav-item">
                        <a class="nav-link" href="Institutions.html">Institutions</a>
                    </li> 

               <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li> 

                <li class="nav-item">
                        <a class="nav-link" href="signup.html">Sign Up</a>
                    </li> 
                  </ul>
          <!---search bar ---->
               
             
  
                   
                   
             
                

            </div>
        </div>

    </nav>
  
    <!--- image set --->

     

   
    
     <!---- actual body start --->
    
        

  </div>
  <div class="container">
        
<div class="jumbotron">

  <!--- start here --->
  <p style="text-decoration: underline;">Contact Us</p>
  <p style="font-size: 17px">Feel free to contact us. If you have any questions, suggestions, complains or if you just wanna talk about E-Learner, let us know!</p><br><br>
  <aside style="float: left; text-align: left;"><p style="text-decoration: underline;">Our Emails:</p><br>
  <p style="font-size: 18px">
  	sajid.shahnawaz@northsouth.edu<br>
  	myselffariakarimporna@gmail.com<br>
  	polashchakrabarty@northsouth.edu<br>
  	abdullah.abir@northsouth.edu<br></p></aside>

  <p>Or leave a comment, your opinions are important to us!</p>
    
<?php

    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn,"contact");

    if(isset($_REQUEST["submit"]))
{
    $email = $_REQUEST["email"];
    $comment = $_REQUEST["comment"];
    mysqli_query($conn, "insert into commenttable(email, comment) values('$email', '$comment')");
}

?>

  <form method="post" style="text-align: left; padding-left: 400px">
  <div>
    <p style="font-size: 14px; font-style: italic; color: red">* required field</p>
    
    Email: <input type="text" name="email" style="width: 210px" required>
    
    <aside style="color: red; text-align: left; float: right; padding-right: 340px"><p style="font-style: italic; font-size: 14px" >* </p>
    </aside><br><br>
   </div>
  
  <p style="text-align: left; font-size: 15px">Comment:</p>
  <textarea rows="5" cols="60" name="comment" style="margin-left: 40px"></textarea><br><br>
  <input type="submit" value="submit" name="submit" style="margin-left: 40px">
  </form>

  
  
  </div>
</div>

 <!---Link footer ---->
    
    
    <div class="c1 container-fluid">
        <a  href="JoinUs.html" ><button type="button" class="btn btn-link" style="color: white;font-size:20px ;margin-top: 30px">Join Us</button></a>
        <a  href="About.html" ><button type="button" class="btn btn-link" style="color: white;font-size:20px ;margin-left: 38%;margin-top: 30px;" id="about">About</button></a>
        <a  href="ContactUs.html" ><button type="button" class="btn btn-link" style="color: white;font-size:20px;float: right; margin-top: 30px">Contact Us</button></a>

    </div>

    <div class="c2 container-fluid">
        <p class="pz">Developed By Group 1 Prime &copy; Copyright 2018</p>

    </div>

</body>

</html>