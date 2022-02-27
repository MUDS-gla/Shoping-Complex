<html>
    <head>

    </head>
    <body>
        <?php

        $servername="localhost";
        $username="root";
        $password="";
        $db="uday";

session_start();

        $conn= new mysqli($servername,$username,$password,$db);


        $name=$_SESSION['name'];
        
        $fname=$_SESSION['fname'];
        
        $idm=$_SESSION['idm'];
        
        $dob=$_SESSION['dob'];

        $gender=$_SESSION['gender'];
        $cnum=$_SESSION['cnum'];
        
        $email=$_SESSION['email'];
        
        $add=$_SESSION['add'];
        $service=$_SESSION['service'];

        
        $sql="insert into users values('".$name."','".$fname."','".$idm."','".$gender."',".$cnum.",'".$email."','".$add."','".$service."','".$dob."')";
        
        if ($conn->query($sql) === TRUE) {
           header("Location:plan.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
            
        ?>
    </body>
</html>