<html>
    <head>
        <title>final</title>
    </head>
    <body>
        
        <?php
        session_start();
        $con=new mysqli('localhost','root','','theater');
        
        
        
        $movie=$_SESSION['movie'];








        if(isset($_SESSION['quan1'])){
        $ticket1=$_SESSION['green_tickets']-$_SESSION['quan1'];
        $q="update movies set green_tickets=$ticket1 where movie_name='$movie'";
        $r1=$con->query($q);
        if($r1)
        {
           echo " <h1><center>Your ticket has successfully confirmed.</center></h1>";
           echo "<br><a href=moviepage.html>Click here</a> to go back to the main page";
        }
        
        echo $con->error;}









        if(isset($_SESSION['quantity2'])){
            $ticket2=$_SESSION['blue_tickets']-$_SESSION['quantity2'];
            $q="update movies set blue_tickets=$ticket2 where movie_name='$movie'";
            
            $r2=$con->query($q);
        if($r2)
        {
           echo " <h1><center>Your ticket has successfully confirmed.</center></h1>";
           echo "<br><a href=moviepage.html>Click here</a> to go back to the main page";
        }
            echo $con->error;}









            if(isset($_SESSION['quantity3'])){
                $ticket3=$_SESSION['purple_tickets']-$_SESSION['quantity3'];
                $q="update movies set purple_tickets=$ticket3 where movie_name='$movie'";
                $r3=$con->query($q);
        if($r3)
        {
           echo " <h1><center>Your ticket has successfully confirmed.</center></h1>";
           echo "<br><a href=moviepage.html>Click here</a> to go back to the main page";
        }
                echo $con->error;}

    
        

        unset($_SESSION['quan1']);
        unset($_SESSION['quantity2']);
        unset($_SESSION['quantity3']);
            
    
        ?>

    </body>
</html>
