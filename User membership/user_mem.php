


<html>

<script>



function dtob(){
    var a=new Date().getFullYear();
    var b="0"+new Date().getMonth();
    var c="0"+new Date().getDate();
    var d=document.getElementById("dob").value;
    var e=parseInt(a)-18;
    var e1=parseInt(b);
    var e2=parseInt(c);
    
    var f=new Date(d).getFullYear();
    
    var f1=new Date(d).getMonth();
    
    var f2=new Date(d).getDate();

    if((f<e)|| (f==e && f1>=e1 && f2>=e2)){
        
    }
    else{
        alert("You can not apply because you are below 18 years of age");
        return false;
    }

    var g=document.getElementById("num").value;
    var h=g.length;
    if(h!=10){
        alert("Success");
return false;
    }
    else{
    }
    }
</script>
<head>
<title>
    User Membership
</title>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>


<?php


if(isset($_POST['sub']))
{
    session_start();
    $_SESSION['name']=$_POST['name'];
        
        $_SESSION['fname']=$_POST['fname'];
        
        $_SESSION['idm']=$_POST['idm'];
        
        $_SESSION['dob']=$_POST['dob'];

        $_SESSION['gender']=$_POST['gender'];
        $_SESSION['cnum']=$_POST['cnum'];
        
        $_SESSION['email']=$_POST['email'];
        
        $_SESSION['add']=$_POST['add'];
        $_SESSION['service']=$_POST['service'];
    $file_name="File uploaded by".$_POST['name']."with email".$_POST['email'].$_FILES['file']['name'];
    $file_loc=$_FILES['file']['tmp_name'];
    $file_store="upload/".$file_name;
    move_uploaded_file($file_loc,$file_store);
    header("Location:store.php");
}
?>


<h1 align="center">
    Welcome to the user membership services.
</h1>


<u><h3 align=center>Personal Details</h3></u>
<table align=center>
<form align=center method="post" action="?"  enctype="multipart/form-data" onsubmit="return dtob()">

    <tr>
    <td>Enter your full name</td>
        <td>
            <input type="text" name="name"  required placeholder="Enter your full name">
        </td>
    </tr>
    <tr>
    <td>Enter your father's name</td>
        <td>
            <input type="text" name="fname"  required  placeholder="Enter your father's name">
        </td>
    </tr>
    <tr>
    <td>Enter your identification marks(if any)</td>
        <td>
            <textarea name="idm" placeholder="Enter your identification marks"></textarea>
        </td>
    </tr>
    <tr>
    <td>Enter your date of birth</td>
        <td>
            <input type="date"  required name="dob" id="dob"  placeholder="DD/MM/YYYY">
        </td>
    </tr>
    <tr>
    <td>Gender</td>
        <td>
            <input type="radio" name="gender"  required value="Male"  >Male</input>
            <input type="radio" name="gender" required  value="Female"  >Female</input>
            
            <input type="radio" name="gender"  required value="Other"  >Other</input>
        </td>
    </tr>
    <tr>
    <td>Enter your contact number</td>
        <td>
            <input type="number" name="cnum"  required  id=num placeholder="Enter your contact number">
        </td>
    </tr>
    <tr>
    <td>Enter your Email</td>
        <td>
            <input type="email" name="email"  required pattern=".+@gmail.com" placeholder="Enter your Email">
        </td>
    </tr>
    
    <td>Enter your full address</td>
        <td>
            <textarea name="add"   required placeholder="Enter your full address"></textarea>
        </td>
    </tr>
   
<tr><td colspan="2">
    <u><h3 align=center>Service Details</h3></u><td></tr>

<tr>
    <td>Choose type of your service</td>
        <td>

            <select name="service" required >
                <option value="">Select</option>
                <option value="clothes">Clothes</option>
                <option value="food">Food</option>
                <option value="toys">Toys</option>
                <option value="parks">Parks</option>
                <option value="theater">Theater</option>
                <option value="bars">Bars</option>
                <option value="clubs">Clubs</option>
                <option value="restaurants">Restaurants</option>
                <option value="accessories">Accessories</option>
                <option value="pharmacies">Pharmacies</option>
                <option value="thechnology">Technology</option>
                <option value="services">Services</option>
                <option value="sports">Sports</option>
                <option value="gym">Gym</option>
            </select>
        </td>
    </tr>
    <tr><td colspan="2">
<u><h3 align=center>Document Proof</h3></u><td></tr>
    <tr>
        <td>
            upload your passport size photo
        </td>
        
                            
            <th><input type="file" accept="image/*" id="iphoto" class="cphoto" name="file" ></th>
                        
    </tr>

    <tr>
        <td>
            enter your adhar
        </td>
        <td>
            <input type="number" placeholder="Enter adhar number">
        </td>
    </tr>


    

    
    


    <tr>
        <td>
            upload photo of your existing shop in the market(if any)
        </td>
        
        <th><input type="file" accept="image/*" id="iphoto1" class="cphoto" name="fphoto" ></th>
    </tr>

    <tr>
        <td>
            upload your adhar
        </td>
        
        <th><input type="file" accept="image/*" id="iphoto2" class="cphoto" name="fphoto" ></th>
    </tr>
    <tr>
        <td>
            upload your age proof
        </td>
        
        <th><input type="file" accept="image/*" id="iphoto3" class="cphoto" name="fphoto" ></th>
    </tr>
    <tr>
        <td>
            upload your address proof
        </td>
        
        <th><input type="file" accept="image/*" id="iphoto4" class="cphoto" name="fphoto" ></th>
    </tr>
    <tr><td>
        
        <div class="g-recaptcha" data-sitekey="6Ld3uVQeAAAAAIzhbcALaxG2hzsThYrihnd24BmR"></div>
        </td>
      </tr>
      <tr>
          <td>
              <input type="submit" name=sub value="Submit">
          </td>
      </tr>
</form></table>
</body>
</html>