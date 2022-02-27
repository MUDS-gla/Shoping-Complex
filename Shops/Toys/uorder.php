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
$name=$_SESSION['oname'];
$email=$_SESSION['email'];
$price=$_SESSION['price'];
$quan=$_SESSION['quan'];
$con=new mysqli('localhost','root','','uday');
$sql="insert into clothorders values('$email','$name',$quan,$price)";
if($con->query($sql)) {
    echo("Order placed successfully");
    echo "<br><br><br><a href='toys.php'>Click here</a>to continue shopping";
}

else{
    echo("Order not placed successfully");

    echo($con->error);
}

?>
</body>
</html>