<?php
session_start();
include("../php/conn.php");
if(isset($_POST["submit"])){

$first_name=$conn->real_escape_string(htmlentities($_POST["first_name"],ENT_QUOTES));
$last_name=$conn->real_escape_string(htmlentities($_POST["last_name"],ENT_QUOTES));
$email=$conn->real_escape_string(htmlentities($_POST["email"],ENT_QUOTES));
$address=$conn->real_escape_string(htmlentities($_POST["address"],ENT_QUOTES));
$phone=$conn->real_escape_string(htmlentities($_POST["phone"],ENT_QUOTES));
$city=$conn->real_escape_string(htmlentities($_POST["city"],ENT_QUOTES));
$password=$conn->real_escape_string(htmlentities($_POST["password"],ENT_QUOTES));

if (empty($first_name) || empty($address) || empty($last_name) || empty($phone) || empty($city)) {

  $_SESSION["msg"]="All fields must be filled";
   header("location:../signup.php");
 }else {


  $check=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
  $rows=mysqli_num_rows($check);
  if ($rows > 0) {

 $_SESSION["msg"]="Email already exists";
  header("location:../signup.php");
}else {
  $registration_date=date('l jS \of F Y h:i:s A');
    $insert=mysqli_query($conn, "insert into users set email='$email', last_name='$last_name', address='$address', first_name='$first_name', phone='$phone', city='$city', registration_date='$registration_date', password='$password'") or die(mysqli_error($conn));
  header("location:index.php");
}
}}else{echo"erro";}
?>
