<?php
session_start();

// initializing variables
$firstname = "";
$middlename = "";
$lastname = "";
$profession = "";
$organisation = "";
$phone = "";
$email = "";
$file = "";


$errors = array(); 
$check = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'education');

// REGISTER USER
if (isset($_POST['Join_user'])) {
  // receive all input values from the form
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $profession = mysqli_real_escape_string($conn, $_POST['profession']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $organisation = mysqli_real_escape_string($conn, $_POST['organisation']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    if(!empty($_POST['Checkbox'])){
    // Loop to store and display values of individual checked checkbox.
    foreach($_POST['Checkbox'] as $selected){
        array_push($check, $selected." ");
        
    }
    }
    
   $checklist = implode($check);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($lastname)) { array_push($errors, "Last name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  
if(!empty($_FILES['cvfile']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['cvfile']['name']);
    if(move_uploaded_file($_FILES['cvfile']['tmp_name'], $path)) {
      echo "Your file ".  basename( $_FILES['cvfile']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
    

    if (count($errors) == 0) {
      $query = "INSERT INTO joinus (firstname, middlename, lastname, profession, organisation, phone, email, Checklist) VALUES ('$firstname', '$middlename', '$lastname', '$profession', '$organisation', '$phone', '$email', '$checklist')";
      mysqli_query($conn, $query);
        echo "<div class='error well well-sm'>".$firstname."</br>".$middlename."</br>".$lastname."</br>".$profession."</br>".$organisation."</br>".$phone."</br>".$email."</br>".$checklist."</div>";
    }
}

?>