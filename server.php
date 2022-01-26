<?php

session_start();

//Initializing Variables
$username="";
$email="";

$errors=array();

//Connect to a Database

$db=mysqli_connect('localhost','root','','database'); 

if($db){
    echo "Connection Successful";
}



//Register users

$roll=mysqli_real_escape_string($db, $_POST['Roll Number']);
$username=mysqli_real_escape_string($db, $_POST['Name']);
$email=mysqli_real_escape_string($db, $_POST['Email']);
$password=mysqli_real_escape_string($db, $_POST['Password']);

//Form Validation

if(empty($roll)){
    array_push($errors, "Roll Number is required");
}
if(empty($username)){
    array_push($errors, "Name is required");
}
if(empty($email)){
    array_push($errors, "Email is required");
}
if(empty($password)){
    array_push($errors, "Password is required");
}

//Check db for existing user with same username

$user_check_query="SELECT * FROM user information WHERE Name='$username'and Email='$email' LIMIT 1";
$result=mysqli_query($db, $user_check_query);
$user=mysqli_fetch($result);

if($user){
    if($user['Name']===$username){
        array_pushh($errors, "Username already exists");
    }
    if($user['Email']===$email){
        array_pushh($errors, "This email id has already been used");
    }
}
if(count($errors)===0){
    $password=md5($password);//This will encrypt the password
    $query="INSERT INTO user information(Name,Email,password) VALUES ('$username','$email', '$password')";
    mysqli_query($db, $query);
    $SESSION['Name']=$username;
    $SESSION['success']="You are now logged in";

    header('location:index.php');

    
}


?>