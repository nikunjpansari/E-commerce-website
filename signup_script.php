<?php

require ("includes/common.php");
$name= mysqli_real_escape_string($con,$_POST['Name']);
$email= mysqli_real_escape_string($con,$_POST['Email']);
$password= mysqli_real_escape_string($con,$_POST['Password']);
$contact= mysqli_real_escape_string($con,$_POST['Contact']);
$city= mysqli_real_escape_string($con,$_POST['City']);
$address= mysqli_real_escape_string($con,$_POST['Address']);

$query="insert into users(Name,Email,Password,Contact,City,Address)values('" . $name . "','" . $email . "',MD5(MD5('" . $password . "')),'" . $contact . "','" . $city . "','" . $address . "')";
$urq=mysqli_query($con,$query) or die(mysqli_error($con));
 $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: products.php');
?>