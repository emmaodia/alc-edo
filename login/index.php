<?php
session_start();
include("../php/conn.php");
$email=$conn->real_escape_string(htmlentities($_POST["email"],ENT_QUOTES));
$password=$conn->real_escape_string(htmlentities($_POST["password"],ENT_QUOTES));

if (empty($email) || empty($password)){
  $_SESSION["msg"]="All fields must be filled";
   header("location:../signin.php");
 }else {





$request= mysqli_query($conn,"SELECT * FROM users WHERE email='$email' && password='$password'");
if($request->num_rows==0) {
  $_SESSION["msg"]="Email or Password incorrect";
    header("location:../signin.php");
}else{
  $display=mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
  while ($row =mysqli_fetch_assoc($display)) {
    $id=$row['id'];
    $email=$row['email'];

  }
  $SESSION["hash"]=md5($email);
  $SESSION["email"]=$email;
  $_SESSION["id"]=$id;
 header("location:../");

}
 }
 ?>
