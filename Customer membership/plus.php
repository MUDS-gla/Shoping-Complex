<html>

<head>
    <title>Payment</title>
    <!-- <style> -->
        <!-- .hidden { -->
            <!-- display: none; -->
        <!-- } -->
    </style>
    <!-- <script> -->
        <!-- function toggleTable1() { -->
            <!-- document.getElementById("myTable1").classList.toggle("hidden"); -->
        <!-- } -->

        <!-- function toggleTable2() { -->
            <!-- document.getElementById("myTable2").classList.toggle("hidden"); -->
        <!-- } -->
    <!-- </script> -->
    <script>
        function creditcard(){
            document.getElementById("myTable1").style.visibility="visible";
            document.getElementById("myTable2").style.visibility="hidden";
        } </script>

<script>
        function netbanking(){
            document.getElementById("myTable2").style.visibility="visible";
            document.getElementById("myTable1").style.visibility="hidden";
        }
    </script>
    <script src="val_credit_val.js"> </script>

</head>

<body align="center">
<?php
session_start();
$name=$_SESSION['name0']; $father_name=$_SESSION['name1']; $gender=$_SESSION['gender'];
$dob=$_SESSION['dob']; $email=$_SESSION['email']; $mobile=$_SESSION['mobile'];
$password=$_SESSION['password']; $pincode=$_SESSION['pincode']; $address=$_SESSION['address'];
$state=$_SESSION['state']; $photo=$_SESSION['photo'];$plus=$_SESSION['plus'];

$plus=$_POST['plus'];
$_SESSION['plus']=$plus;
$con=new mysqli('localhost','root','','uday');
//$mysqli_select_db($con,"db1");

$q=" INSERT INTO `customer_membership_details` (`name`, `father_name`, `gender`, `dob`, `email`, `mobile`, `password`, `pincode`, `address`, `state`, `plan`, `photo`) VALUES ('$name', '$father_name', '$gender', '$dob', '$email', '$mobile', '$password', '$pincode', '$address', '$state','$plus','$photo')";
$con->query($q);
$con->close();
?>
    <div>
        <p><b><h1>Confirm Your Membership</h1></b></p>
    </div>
    <div>
        <button onclick="creditcard()">CREDIT CARD</button>
        <button type="button"><a href="https://www.paytmbank.com">PAYTM</a></button>
        <button onclick="netbanking()">NET BANKING</button>

    </div>
    <form action="finalcustomermembership1.php" method="post" id="credit_card" onsubmit="return credit()">
    <table border=2 align="center" id="myTable1" style="width:50%; visibility:hidden"  class="hidden"  >
        <tr>
            <th colspan=3>CREDIT CARD</th>
        </tr>
        <tr>
            <td>Card Holder Name:</td>
            <td><input type="name" id="iname" class="cname" name="c1name" placeholder="Card owner name" required></td>
        </tr>
        <tr>
            <td>Card Number:</td>
            <td><input type="number" id="inumber" class="cnumber" name="f1number" placeholder="Enter card number" required></td>
        </tr>
        <tr>
            <td>Expiration Date:</td>
            <td><input type="number" id="im" class="cm" name="f1m" placeholder="MM" required><br>
                <input type="number" id="iy" class="cy" name="f1y" placeholder="YYYY" required></td>
        </tr>
        <tr>
            <td>CVV:</td>
            <td><input type="number" id="icvv" class="cvv" name="f1cvv" required></td>
        </tr>

        <tr>
            <td colspan=2>
                <center><input type="submit" value="PAY" ></center>
            </td>
        </tr>

    </table></form>
<form action="finalcustomermembership1.php" method="post" id="net_banking"  >
    <table border=2 align="center" id="myTable2" style="width:50%; visibility:hidden" class="hidden">
        <tr>
            <th colspan=2>NET BANKING</th>
        </tr>
        <tr>
            <td>Bank Name:</td>
            <td><select name="Choose the Bank">
                            <option value="select">Select</option>
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
                <th>Rs:500</th>
            </tr>
            <tr>
                <td colspan=2>
                   <center> <input type="submit" value="pay" ></center>
                </td>
            </tr>





    </table>
    </form>
</body>

</html>
