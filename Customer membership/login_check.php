<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uday";
$email=$_POST['fmail'];
$pass=$_POST['fpass'];
// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }
$sql= "SELECT*FROM customer_membership_details WHERE email='$email' and 
password='$pass'";
$result=$conn->query($sql);
//check given email and password exits in given rows
if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    $_SESSION['check_email']=$email;
    $_SESSION['check_password']=$email;
    header("Location:renewplan.php");
}
else
{
    echo "Email or Password are incorrect.";
}
?>
