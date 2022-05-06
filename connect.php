<?php

$fname='';
$lname='';
$email='';
$pd='';
//process for insert.
$conn= mysqli_connect('localhost','root','','connect') or die(mysqli_error($conn));
if(isset($_POST['save'])){
    $fuser= $_POST['username'];
    $lpss= $_POST['password'];
    $add= $_POST['address'];
    $email= $_POST['email'];

    $insert="INSERT INTO login form(username,password,address,email)
     VALUES('$fuser','$lpss','$add','$email')";
     $sql=mysqli_query($conn,$insert);
}
?>