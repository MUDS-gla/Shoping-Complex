<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <?php
        session_start();
        $movie=$_POST['movie'];
        
                                
                                $_SESSION['movie']=$movie;
                           
                        
                                

                            
          
        
       ?>
        <h1><center>Details Form</center></h1></h2>
        <form method="post" action="movieticket.php">
            <table border="2" align="center">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" class="cname" id="iname" name="fname" placeholder="Enter you name" required></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="number" class="cage" id="iage"name="fage" placeholder="Enter your age" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" class="cmail" id="imail" name="fmail" placeholder="Enter your email" required> </td>
                </tr>
                <tr>
                    <td>Mobile No.:</td>
                    <td><input type="text" class="cmob" id="imob" name="fmob" placeholder="Enter your mobile number" required></td>
                </tr>
                <tr>
                <td> Day:</td>
                <td><?php
                    $day=$_POST['day'];
                    $_SESSION['day']=$day;
                    echo $day;
                    ?>
                     </td>
            </tr>
            <tr>
                <td> Timing:</td>
                <td><?php
                    $time=$_POST['time'];
                    $_SESSION['time']=$time;
                    echo "$time";
                     ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><center><input type="submit" value="CONFIRM"></center></td>
            </tr>
            </table>

        </form>
        <center><button type="button"><a href="moviepage.html">BACK</a></button></center>

    </body>
</html>