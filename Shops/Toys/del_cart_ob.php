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
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "uday";

$state = $_SESSION['state'];

$mobile = $_SESSION['mobile'];
$con = new mysqli($servername, $username, $password, $db);
$sql="delete from " . $state . $mobile . "cart where oname='".$_POST['oname']."'";
$result = $con->query($sql);

if($result){
    header("Location:open_cart.php");
}
else{
    echo $con->error;
}

?>
</body>
</html>