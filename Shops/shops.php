<html>
    <body>
        <?php
        session_start();
        
        echo "<bR><center><a href=javascript:history.go(-1)>Back</a></center>";
        if(isset($_SESSION['state'])){
            echo "<a href=../index2.php>Home</a>";
        }
        else{
            
            echo "<a href=../index.php>Home</a>";
        }
        ?>
        shops are:-
        <a href="clothes/agegrp_gender.php">Clothes</a>
        <a href="Toys/agegrp_gender.php">Toys</a>
        <a href="#">Food</a>
        <a href="#">Parks</a>
        <a href="Theatre/moviepage.html">Theater</a>
        <a href="#">Bars</a>
        <a href="#">Clubs</a>
        <a href="#">Restaurants</a>
        <a href="#">Accessories</a>
        <a href="#">Pharmacies</a>
        <a href="#">Technologies</a>
        <a href="#">Services<a>
        <a href="#">Sports</a>
        <a href="#">Gym</a>
    </body>
</html>