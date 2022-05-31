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

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="buy.js"></script>
    <!-- title of the page --->
    <title>Buy now</title>

    <!--- css file link for navbar--->
    <link rel="stylesheet" href="home.css">
    
    
     <link rel="stylesheet" href="signup.css">
     <link rel="stylesheet" href="try2.css">

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
                        <a class="nav-link" href="Institutions.php">Institutions</a>
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
        
 <form class="modal-content" action="addbuy.php" name="signForm" onsubmit="return validatebuyForm()" method="post" >
    <div class="container">
      <h1>Buy Now</h1>
      <p>Please fill in this form to buy the product</p>
      <p>Price:<?php 
      $var_value = $_GET['varname'];

       echo $var_value;
       ?> 
     </p>

      <input type="hidden" name=varname value="<?php echo $var_value; ?>"  />

      <label for="fullname"><b>Full Name</b></label>
      <input type="text" placeholder="Enter Your Full Name" name="fullname" >
      <br>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" >
      <br>



 <label for="phone"><b>phone number</b></label>
      <input type="text" placeholder="Enter Your phone" name="phone" >
      <br>

      <label for="card_number"><b>card number</b></label>
      <input type="text" placeholder="Enter card number" name="card_number" >
      <br>




        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> I agree
      </label>

      <p>By clicking buy button you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button class="b1" type="button" onclick="location.href='Home.php'"  id="cancelbtn">Cancel</button>
        <button class="b1" type="submit" id="signupbtn">Buy</button>
      
  </form>



<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Book">
<input type="hidden" name="item_number" value="b1">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="amount" value="5">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="shipping" value="1.00">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

<form method="get" action="stripe.php">
   
<input type="hidden" name=varname value="<?php echo $var_value; ?>" class="btn btn-success" style="margin-left: 10px" />
<button type="submit" class="btn btn-success" style="margin-left: 10px" align="right">Pay with Stripe</button>
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
