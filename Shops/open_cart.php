<html>

<head>
    <title>
    </title>
    
    <style>
    </style>
</head>

<body>
    <?php

    
    session_start();
    
    if (isset($_SESSION['state'])) {
        
    echo "<bR><center><a href=javascript:history.go(-1)>Back</a></center>";
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "uday";

        $state = $_SESSION['state'];

        $mobile = $_SESSION['mobile'];
        $con = new mysqli($servername, $username, $password, $db);

        
        




        $sql = "SELECT * FROM " . $state . $mobile . "cart";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $_SESSION['oname']=$row['oname'];
                
                echo "Object Name: " . $row["oname"] . " Price" . $row["oprice"] ."<form method='post' action='del_cart_ob.php'><button type=submit name=oname value=".$row['oname'].">remove</button></form><br>";
            }

           echo "<form method='post' action='buy_cart.php'><button type=submit name=oname value=".$row['oid'].">Buy now</button></form><br>";
        
        } 
        else{
            echo '<script>alert("Empty cart");</script>';
            echo "<a href='toys.php'>Click here</a>to continue shopping";
            
        }

    }
    else {
        
    echo "<bR><center><a href=javascript:history.go(-1)>Back</a></center>";
        echo "Plz login first to see your cart";
        echo "<br><a href=customer_login.php>Click here to login</a>";
    }
    ?>

</body>

</html>