<?php
session_start();
$name=$_SESSION['name0']; $father_name=$_SESSION['name1']; $gender=$_SESSION['gender'];
$dob=$_SESSION['dob']; $email=$_SESSION['email']; $mobile=$_SESSION['mobile'];
$password=$_SESSION['password']; $pincode=$_SESSION['pincode']; $address=$_SESSION['address'];
$state=$_SESSION['state']; $photo=$_SESSION['photo'];$plus=$_SESSION['plus'];

$con=new mysqli('localhost','root','','uday');
//$mysqli_select_db($con,"db1");

$q=" INSERT INTO `customer_membership_details` (`name`, `father_name`, `gender`, `dob`, `email`, `mobile`, `password`, `pincode`, `address`, `state`, `plan`, `photo`) VALUES ('$name', '$father_name', '$gender', '$dob', '$email', '$mobile', '$password', '$pincode', '$address', '$state','$plus','$photo')";
$con->query($q);
$con->close();
echo"Your payment for PLUS plan is succesfully activated";
?>

<a href=../index.php><button>Continue shopping</button></a>