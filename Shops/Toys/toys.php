<html>
    <head>
        <style>
            
        </style>
    </head>
    <body>
        <?php
        
        if(isset($_SESSION['state'])){
            echo "<a href=../../index2.php>Home</a>";
        }
        else{
            
            echo "<a href=../../index.php>Home</a>";
        }
        echo "<bR><center><a href=javascript:history.go(-1)>Back</a></center>";
        ?>
        <h6><a href=open_cart.php>Click here</a> to open cart</h6>
        <h1>
        Toys for Infants (0-2 years)
        </h1>
        <h3>
            Rattlers
        </h3>
        
    <a href=rattlers.php><img src=rattlers1.jpg alt="Rattler" height="300px" width="300px"> </a>
    <h3>
            Stuffed toys
        </h3>    
    <a href=stuf.php><img src=stuf1.jpg alt="Rattler" height="300px" width="300px"> </a>
    <br>
    <h1>
        Toys for Toddlers (2-4 years)
        </h1>
        <h1>
        Toys for Kindergartners (4-6 years)
        </h1>
        <h1>
        Toys for school-going children (6+ years)
        </h1>

    </body>
</html>