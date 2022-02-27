<html>
       <head>
             <title>
             </title>
                        <script>
                        </script>
             <style>
             </style>
       </head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$db="uday";

$con= new mysqli($servername,$username,$password,$db);
session_start();

$name=$_SESSION['oname'];
$price=$_SESSION['oprice'];
$state=$_SESSION['state'];

$mobile=$_SESSION['mobile'];
if(isset($state)){
$sql="insert into ". $state . $mobile . "cart(oname,oprice) values('$name','$price')";

$result=$con->query($sql);
if($result){
echo "item added to cart successfully";
echo "<br> <a href=toys.php>Click here</a> to continue shopping";}
else{
      echo $con->error;
}}
else{
     echo " plz login first ";
     echo "<a href=Customer_login.php >Click here</a> to login";
}

?>
</body>
</html>