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
    <title>About</title>

    <!--- css file link for navbar--->
    <link rel="stylesheet" href="home.css">
     <link rel="stylesheet" href="icon.css">
     <link rel="stylesheet" href="style.css">

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
               
              <li class="form-inline">  
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" ></input>
  <a  href="Books.php" ><i class="glyphicon glyphicon-search" ></i></a> 
   </li>
  
                   
                   
             
                

            </div>
        </div>

    </nav>
  
    <!--- image set --->

     

   
    
     <!---- actual body start --->
    
        

  </div>
  <div class="container">
        
<div class="jumbotron">

  <!--- start here --->
  <p style="font-size: 20px; text-decoration: underline;">About E-Learner</p><br>
  <aside style="float: right; width: 170px; height: 170px; font-style: italic; font-size: 19px; margin-left: 110px; margin-bottom: 50px; margin-right: 10px">"Knowledge is power, information is liberating. Education is the premise of progress, in every society, in every family." <br>- Kofi Annan</aside>
  <p style="text-align: left; font-size: 17px">
    E-Learner is a collaborative effort by Group 1 Prime which aims to provide online based education system to Bangladesh. We, the members of Group 1 Prime, are university students and learners of web design and development. We aspire to make technology a critical and powerful tool for providing education to a variety of age groups and academic backgrounds.<br><br>
    E-Learner comprises of resources for school students (Bangla and English Medium alike) and also for University students. Videos are categorized under curriculums. <br><br>
The resources types are video lectures and guidelines under the Video section. Books and items such as laboratory materials, apparatus etc, are available for purchase under the Store section. 

</p><br><br>
<p style="font-size: 20px; text-decoration: underline;">About Us</p>
<p style="text-align: left; font-size: 17px">Group 1 Prime was formed as a group for our semester long project on Internet and Web technologies course, under supervision of our teacher Md Naqib Imtiaz Hussain
and lab instructor Md. Shafiqul Islam.<br><br>
We are students who aspire to create better systems that would make education easier and within reach of our fellow students of all ages. As we are students ourselves, we intend to keep monetization of E-Learner at a bare minimum until E-Learner grows to support wider range of academic topics, for which we may require to expand our application and likewise our financial boundaries.
</p>
  
  </div>
</div>

 <!---Link footer ---->
    
    
    <div class="c1 container-fluid">
        <a  href="JoinUs.html" ><button type="button" class="btn btn-link" style="color: white;font-size:20px ;margin-top: 30px">Join Us</button></a>
        <a  href="About.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px ;margin-left: 38%;margin-top: 30px;">About</button></a>
        <a  href="ContactUs.php" ><button type="button" class="btn btn-link" style="color: white;font-size:20px;float: right; margin-top: 30px">Contact Us</button></a>

    </div>

    <div class="c2 container-fluid">
        <p class="pz">Developed By Group 1 Prime &copy; Copyright 2018</p>

    </div>

</body>

</html>