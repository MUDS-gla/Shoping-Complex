<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="val_pass_pin.js"></script>
</head>

<body>
    <?php
if (isset($_POST['fjoin'])) {

$name = $_POST['fname0'];
$father_name = $_POST['fname1'];
$gender = $_POST['fgender'];
$dob = $_POST['fdate'];
$email = $_POST['femail'];
$mobile = $_POST['fmobile'];
$password = $_POST['fpassword'];
$pincode = $_POST['fpincode'];
$address = $_POST['faddress'];
$state = $_POST['fstate'];
$photo = $_POST['fphoto'];
echo $name.$father_name.$gender.$dob.$address.$email;
session_start();

$con = new mysqli('localhost', 'root', '214125', 'uday');
if ($con->connect_error)
{die ("connection failed");
}
$q1 = "create table customers ( name char(335), father_name char(342), gender char(6),dob varchar(30), email varchar(322),mobile int(20),password varchar(50),pincode int(10),address varchar(200),state char(50))";
$con->query($q1);
echo "error".$con->error;

$q = "INSERT INTO `customers` (`name`, `father_name`, `gender`, `dob`, `email`, `mobile`, `password`, `pincode`, `address`, `state`) VALUES ('$name', '$father_name', '$gender', '$dob', '$email', $mobile, '$password', $pincode, '$address', '$state')";
$result = $con->query($q);
echo "error".$con->error;

if ($result) {
    

    $res1 = $con->query($sql);
    echo $con->error;

    if ($res1) {

        header("location:success.php");
    } else {
        echo '<script>alert("Duplicate mobile Entry");</script>';
        echo $con->error;
        
    }
}
else{ 
echo '<script>alert("Duplicate email Entry");</script>';
}
$con->close();
}

?>
    <div>
        <h1>Customer Signup</h1>
        <div>
            <form action="?" method="post" onsubmit=" return validation()">
                <table>
                    <tr>
                        <th colspan="2">
                            <h3><u>Personal dedail</u></h3>
                        </th>
                    </tr>
                    <tr>
                        <th>Enter your full name:</th>
                        <th><input type="text" id="iname0" class="cname0" name="fname0" placeholder="Enter your full name" required></th>
                    </tr>
                    <tr>
                        <th>Enter your father's name:</th>
                        <th><input type="text" id="iname1" class="cname1" name="fname1" placeholder="Enter your father's name" required></th>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <th><input type="radio" id="igender" class="cgender" name="fgender" value="Male" required>Male<input type="radio" id="igender" class="cgender" name="fgender" value="Female" required required>Female<input type="radio" id="igender" class="cgender" name="fgender" value="other" required>Others</th>
                    </tr>
                    <tr>
                        <th>Enter your date of birth:</th>
                        <th><input type="date" id="idate" class="cdate" name="fdate" required></th>
                    </tr>
                    <tr>
                        <th>Enter your email:</th>
                        <th><input type="Email" id="iemail" class="cemail" name="femail" placeholder="Enter your email" required></th>
                    </tr>
                    <tr>
                        <th>Enter your mobile number:</th>
                        <th><input type="tel" id="imobile" class="cmobile" name="fmobile" placeholder="10-digit mobile number without prefixes" pattern="[0-9]{10}" required></th>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <th><input type="password" id="ipassword" class="cpassword" name="fpassword" required></th>
                    </tr>
                    <tr>
                    <tr>
                        <th>Confirm Password:</th>
                        <th><input type="password" id="icpassword" class="ccpassword" name="fcpassword" required></th>
                    </tr>
                    <tr>
                        <th>Pincode:</th>
                        <th><input type="number" id="ipincode" class="cpincode" name="fpincode" placeholder="6 digits [0-9] PIN code" required></th>
                    </tr>
                    <tr>
                        <th>Enter your full address:</th>
                        <th>
                            <textarea id="iaddress" class="caddress" name="faddress" rows="4" cols="25" required>Enter your full address</textarea>

                        </th>
                    </tr>
                    <tr>
                        <th>State:</th>
                        <th><select id="istate" class="cstate" name="fstate" required>
                                <option value=""> Please Select </option>
                                <option value=""></option>
                                <option value="AndrdeshPradesh">Andrdesh Pradesh</option>
                                <option value="ArunachalPradesh">Arunachal pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chattisgarh">Chattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="HimachalPradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="MadhyaPradesh">Madhya pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="TamilNadu">Tamil nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="UttarPradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="WestBengal">West Bengal</option>
                                </option>
                                <option value="other"> Other </option>
                            </select></th>
                    </tr>
                    <tr>
                        <th>Upload photo:</th>
                        <th><input type="file" accept="image/*" id="iphoto" class="cphoto" name="fphoto" required></th>
                    </tr>

                    <tr>
                        <th colspan="2"> <input type="submit" id="ijoin" class="cjoin" name="fjoin" value="join membership">
                        </th>
                    </tr>
                </table>
                <h3><b>OR</b></h3>
                <a href="login_renew.php" style="text-decoration:none; border:2px black solid ; border-radius: 2px; " target="_self">Renew membership</a>
            </form>
        </div>
</body>

</html>