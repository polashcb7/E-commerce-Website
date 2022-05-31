


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
   
     <link rel="stylesheet" href="icon.css">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="try2.css">

     <link rel="stylesheet" type="text/css" href="index1.css">
    
    
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
$sql = "select * from joinus;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
echo "<table>";
echo "<tr>";
echo "<th>" . "First Name" ."</th>"."<th>" . "Middle Name" ."</th>" . "<th>" . "Last Name" ."</th>";
echo "<th>" . "Profession"."</th>"."<th>" . "Organization"."</th>"."<th>" . "Phone"."</th>";
echo "<th>" . "Email"."</th>"."<th>" . "Interested Topic"."</th>";

echo "</tr>";
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['firstname'] . " </td>";
    echo "<td>" .$row['middlename'] . " </td>";
    echo "<td>" .$row['lastname'] . " </td>";
    echo "<td>" . $row['profession'] . " </td>";
    echo "<td>" .$row['organisation'] . " </td>";
    echo "<td>" .$row['phone'] . " </td>";
    echo "<td>" . $row['email'] . " </td>";
    echo "<td>" .$row['checklist'] . " </td>";
   

   
   
    echo "</tr>";
  }
  echo "</table>";
}
?>
  
  </div>
</div>
</div>

 <!---Link footer ---->
    
    
    

    <div class="c2 container-fluid">
        <p class="pz">Developed By Team Work &copy; Copyright 2018</p>

    </div>

</body>

</html>