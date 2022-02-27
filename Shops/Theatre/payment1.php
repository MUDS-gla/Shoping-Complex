<html>

<head>
    <title>Payment</title>
    <!--<style>
        table{
            width: 400px;
            height: 400px;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            margin-bottom: auto;}
        </style>-->
    <!-- <style> -->
        <!-- .hidden { -->
            <!-- display: none; -->
        <!-- } -->
    <!--</style>-->
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
    
    if(isset($_POST['quan1'])){
        $_SESSION['quan1']=$_POST["quan1"];
        $ticket1=$_SESSION['green_tickets']-$_POST['quan1'];
    if($ticket1<0)
    {
        echo '<script>alert("The number of tickets you have requested is not available, you can buy the remaining tickets. ");</script>';
    }
}



if(isset($_POST['quantity2'])){
    $_SESSION['quantity2']=$_POST["quantity2"];
    $ticket2=$_SESSION['blue_tickets']-$_POST['quantity2'];
if($ticket2<0)
{
    echo '<script>alert("The number of tickets you have requested is not available, you can buy the remaining tickets. ");</script>';
}
}


if(isset($_POST['quantity3'])){
    $_SESSION['quantity3']=$_POST["quantity3"];
    $ticket3=$_SESSION['purple_tickets']-$_POST['quantity3'];
if($ticket3<0)
{
    echo '<script>alert("The number of tickets you have requested is not available, you can buy the remaining tickets. ");</script>';
}
}





    ?>
    <div>
        <p><b><h1>Confirm Your Order</h1></b></p>
    </div>
    <div>
        <button onclick="creditcard()">CREDIT CARD</button>
        <button onclick="netbanking()">NET BANKING</button>

    </div>
    <form id="credit_card" onsubmit="return credit()" action="final1.php">
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
                <th>
                    <p>Amount: </p>
                </th>
                <th><?php
                    
                    $amount=$_POST['amount'];
                    $quantity1=$_POST['quan1'];
                    $_SESSION['amount']=$amount;
                    $_SESSION['quan1']=$quantity1;
                    $total=$amount*$quantity1;
                    $_SESSION['total']=$total;
                    echo $total;
                    ?>
                    </th>
            </tr>

        <tr>
            <td colspan=2>
                <center><input type="submit" value="PAY" ></center>
            </td>
        </tr>

    </table></form>
<form id="net_banking" action="final1.php">
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
                <td>Mobile number:</td>
                <td><input type="text" name="mob" placeholder="Enter your mobile number" required></td>
            </tr>
            <tr>
                <th>
                    <p>Amount: </p>
                </th>
                <th>
                    <?php

                    
                    echo $total;
                    ?>
                </th>
            </tr>
            <tr>
                <td colspan=2>
                   <center> <input type="submit" value="PAY" ></center>
                </td>
            </tr>





    </table>
    </form>
</body>

</html>