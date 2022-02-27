<html>

<head>
    <title>Payment</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        function toggleTable1() {
            document.getElementById("myTable1").classList.toggle("hidden");
        }

        function toggleTable2() {
            document.getElementById("myTable2").classList.toggle("hidden");
        }
    </script>
<script src="val_credit_val.js"> </script>
</head>

<body align="center">
    <div>
        <p><b><h1>Confirm Your Membership</h1></b></p>
    </div>
    <div>
        <button onClick="toggleTable1()">CREDIT CARD</button>
        <button type="button"><a href="https://www.paytmbank.com">PAYTM</a></button>
        <button onClick="toggleTable2()">NET BANKING</button>

    </div>
    <form action="finalcustomermembership_renew3.php" method="post" onsubmit="return credit()">
    <table border=2 align="center" id="myTable1" style="width:50%" class="hidden">
        <tr>
            <th colspan=3>CREDIT CARD</th>
        </tr>
        <tr>
            <td>Card Holder Name:</td>
            <td><input type="name" id="iname" class="cname" name="c2name" placeholder="Card owner name" required></td>
        </tr>
        <tr>
            <td>Card Number:</td>
            <td><input type="number" id="inumber" class="cnumber" name="f2number" placeholder="Enter card number" required></td>
        </tr>
        <tr>
            <td>Expiration Date:</td>
            <td><input type="number" id="im" class="cm" name="f2m" placeholder="MM" required><br>
                <input type="number" id="iy" class="cy" name="f2y" placeholder="YYYY" required></td>
        </tr>
        <tr>
            <td>CVV:</td>
            <td><input type="number" id="icvv" class="cvv" name="f2cvv" required></td>
        </tr>

        <tr>
            <td colspan=2>
                <center><input type="submit" value="PAY"></center>
            </td>
        </tr>

    </table>
    </form>
    <form action="finalcustomermembership_renew3.php" method="post">
    <table border=2 align="center" id="myTable2" style="width:50%" class="hidden">
        <tr>
            <th colspan=2>NET BANKING</th>
        </tr>
        <tr>
            <td>Bank Name:</td>
            <td><select name="Choose the Bank" required>
                            <option value="">Select</option>
                            <option value="sbi">SBI Bank</option>
                            <option value="hdfc">HDFC Bank</option>
                            <option value="canara">Canara Bank</option>
                            <option value="icici">ICICI Bank</option>
                            <option value="kotak">KOTAK Bank</option>
                            <option value="axis">AXIS Bank</option>
                            <option value="baroda">Bank of BARODA</option>
                            <option value="india">Bank of INDIA</option>
                        </select></td>
            <tr>
                <td>Account number:</td>
                <td><input type="text" name="account" placeholder="Enter your account number" required></td>
            </tr>
            <tr>
                <td colspan=2>
                    <center>OR</center>
                </td>
            </tr>
            <tr>
                <td>Mobile number:</td>
                <td><input type="text" name="mob" placeholder="Enter your mobile number" required></td>
            </tr>
            <tr>
                <th>
                    <p>Amount: </p>
                </th>
                <th>Rs:1800</th>
            </tr>
            <tr>
                <td colspan=2>
                    <center><input type="submit" value="pay"></center>
                </td>
            </tr>





    </table>

</body>

</html>
<?php
session_start();
/*$name=$_SESSION['name0']; $father_name=$_SESSION['name1']; $gender=$_SESSION['gender'];
$dob=$_SESSION['dob']; $email=$_SESSION['email']; $mobile=$_SESSION['mobile'];
$password=$_SESSION['password']; $pincode=$_SESSION['pincode']; $address=$_SESSION['address'];
$state=$_SESSION['state']; $photo=$_SESSION['photo'];*/
$star_renew=$_POST['star'];
$_SESSION['star_renew']=$star_renew;
/*$con=new mysqli('localhost','root','','db1');
//$mysqli_select_db($con,"db1");

$q=" INSERT INTO `customer_membership_details` (`name`, `father_name`, `gender`, `dob`, `email`, `mobile`, `password`, `pincode`, `address`, `state`, `plan`, `photo`) VALUES ('$name', '$father_name', '$gender', '$dob', '$email', '$mobile', '$password', '$pincode', '$address', '$state','$gold','$photo')";
$con->query($q);
$con->close();*/
?>