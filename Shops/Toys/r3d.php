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
    $_SESSION['oname']="rat3";
    $_SESSION['oprice']="9000";
    
    echo "<bR><center><a href=javascript:history.go(-1)>Back</a></center>";
    if(isset($_SESSION['state'])){
        echo "<a href=../../index.php>Home</a>";
    }
    else{
        
        echo "<a href=../../index2.php>Home</a>";
    }
    ?>
<img src=rattlers3.jpg height=300px width=300px>

<h3>Details</h3>

<table>
    <tr>
        <td>
            Price
        </td>
        <td>
            Rs. 9000
        </td>
    </tr>
    <tr>
        <td>
            Brand
        </td>
        <td>
            Rattler company
        </td>
    </tr>
    <tr>
        <td>
            Colours
        </td>
        <td>
            Green and red
        </td>
    </tr>
    <tr>
        <td>
            Durability
        </td>
        <td>
            Premium
        </td>
    </tr>
    <tr>
        <td>
            Size
        </td>
        <td>
           18 cm
        </td>
    </tr>
    <form method="post" action="payment.php">
    <tr>
        <td>select quantity</td>
        <td>
            <select name="quan">
                <option value="">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                
            </select>
        </td>
    </tr>
</table>

   <button type="submit" name="price" value='500'>Buy Now</button>
   </form>
     <br>
   <a href=addtocart.php> <button>Add to cart</button></a>

</body>
</html>