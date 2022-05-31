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
    <title>Home</title>

    <!--- css file link for navbar--->
    <link rel="stylesheet" href="home.css">
     <link rel="stylesheet" href="icon.css">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="try2.css">

     <link rel="stylesheet" type="text/css" href="index1.css">

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
  
    <!--- image set --->

     

   
    
     <!---- actual body start --->
    
        

  </div>
</div>
  <div class="container">
        
<div class="jumbotron">

  <!--- start here --->
  <div class="container">
 <?php
include_once 'conn.php';
$sql = "select iid,iname,icatagory,iaddress,iphone from institutionsview;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
echo "<table>";
echo "<tr>";
echo "<th>" . "ID" ."</th>"."<th>" . "Name" ."</th>" . "<th>" . "Category" ."</th>";
echo "<th>" . "Address"."</th>"."<th>"."Phone"."</th>" ;

echo "</tr>";
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['iid'] . " </td>";
    echo "<td>" .$row['iname'] . " </td>";
    echo "<td>" .$row['icatagory'] . " </td>";
    echo "<td>" .$row['iaddress'] . " </td>";
    echo "<td>" .$row['iphone'] . " </td>";
    echo "</tr>";
  }
  echo "</table>";
}
?>
  
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