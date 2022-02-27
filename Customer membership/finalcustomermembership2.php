<?php
session_start();
$name=$_SESSION['name0']; $father_name=$_SESSION['name1']; $gender=$_SESSION['gender'];
$dob=$_SESSION['dob']; $email=$_SESSION['email']; $mobile=$_SESSION['mobile'];
$password=$_SESSION['password']; $pincode=$_SESSION['pincode']; $address=$_SESSION['address'];
$state=$_SESSION['state']; $photo=$_SESSION['photo'];$gold=$_SESSION['gold'];
$con=new mysqli('localhost','root','','db1');
//$mysqli_select_db($con,"db1");

$q=" INSERT INTO `customer_membership_details` (`name`, `father_name`, `gender`, `dob`, `email`, `mobile`, `password`, `pincode`, `address`, `state`, `plan`, `photo`) VALUES ('$name', '$father_name', '$gender', '$dob', '$email', '$mobile', '$password', '$pincode', '$address', '$state','$gold','$photo')";
$con->query($q);
$con->close();
echo"<b>Your payment for GOLD plan is succesfully activated</b>";
?>