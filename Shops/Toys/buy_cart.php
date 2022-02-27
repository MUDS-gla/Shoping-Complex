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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "uday";
session_start();
    $con = new mysqli($servername, $username, $password, $db);


    $s = "SELECT * FROM customers where name=$_SESSION['fname'] and email=$_SESSION["fmail"]';
    $re = $con->query($s);

    if ($re->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $_SESSION['mobile'] = $row['fmobile'];
            $_SESSION['address'] = $row['faddress'];
            $_SESSION['pincode'] = $row['fpincode'];
            $_SESSION['state'] = $row['fstate'];
        }
    } else {

        echo $con->error;
    }

    $sql = "SELECT * FROM " . $state . $mobile . "cart";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {


            $_SESSION['oname'] = $row['oname'];
            $_SESSION['oprice'] = $row['oprice'];
            $_SESSION['oid'] = $row['oid'];
            $sq = 'insert into toyorders values($_SESSION["mobile"],$_SESSION["address"], $_SESSION["pincode"],$_SESSION["state"],$_SESSION["oname"],$_SESSION["oid"],$_SESSION["oprice"]';
            echo "items order placed successfully";
            echo "<br> <a href=toys.php>Click here</a> to continue shopping";
        }
    } else {
        echo $con->error;
    }

    ?>
</body>

</html>