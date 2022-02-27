<?php

session_start();
$plan=$_SESSION['star_renew'];
$email=$_SESSION['check_email'];

$con=new mysqli('localhost','root','','db1');
//$mysqli_select_db($con,"db1");
$sql = "SELECT plan  FROM customer_membership_details WHERE email='$email'";
$result=$con->query($sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      $previous_plan=$row["plan"];}}
//$mysqli_select_db($con,"db1");
$r="UPDATE `customer_membership_details` SET previous_plan='$previous_plan' WHERE email='$email' ";
$con->query($r);

$q="UPDATE `customer_membership_details` SET plan='$plan' WHERE email='$email' ";
$con->query($q);
$con->close();
echo"<b>Your membership is renewed</b>";
?>