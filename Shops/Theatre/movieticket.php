<html>
    <head>
        <title>Tickets</title>
    </head>
    <body>
        <h1><center>Tickets</center></h1>
        <div>
            <table border="2" align="center">
                
                <tr>










                    <th> Green Ticket </th>
                    <td> These seats are on the main level of the theatre and offer the closest seating to the stage.</td>
                    <td align="center"> Tickets availabe:<br>
                        <?php
                            session_start();
                            $movie=$_SESSION['movie'];
                            $con=new mysqli('localhost','root','','theater');
                            
                            
                            
                            
                            $q="SELECT green_tickets from movies where movie_name='$movie'";
                            $res=$con->query($q);
                            if($res->num_rows>0)
                            {
                                while($row=$res->fetch_assoc())
                                {
                                    $_SESSION['green_tickets']=$row['green_tickets'];
                                    echo $row['green_tickets'];
                                }
                            }
                            else echo $con->error;
                        ?>
                        </td>
                    <td> Rs.500 </td>
                    <td>
                        <form method="post" action="payment1.php">
                        <br>    Quantity: <input type="number" name="quan1" required><br>
                        <input type="hidden" value="500" name="amount">
                        <br>    <center><input type="submit" value="BUY"></center>
                        </form>
                    </td>
                    </tr>
                    <tr>
















                        <th >Blue Ticket </th>
                        <td> The first of two elevated sections just ablove the Green is the Blue.<br>
                             Sight-lines-and prices-dimish the further back you sit, but can offer great value to the show.</td>
                        <td align="center"> Tickets availabe:<br>
                            <?php
                               $movie=$_SESSION['movie'];
                               $con=new mysqli('localhost','root','','theater');
                               
                               
                               $q="SELECT blue_tickets from movies where movie_name='$movie'";
                               $res=$con->query($q);
                               if($res->num_rows>0)
                               {
                                   while($row=$res->fetch_assoc())
                                   {
                                       $_SESSION['blue_tickets']=$row['blue_tickets'];
                                       echo $row['blue_tickets'];
                                   }
                               }
                               else echo $con->error;
                            ?>
                        
                        </td>
                        <td> Rs.400 </td>
                        <td>
                            <form method="post" action="payment1.php">
                            <br>    Quantity: <input type="number" name="quantity2" required><br>
                                <input type="hidden" value="400" name="amount">
                            <br>    <center><input type="submit" value="BUY"></center>
                            </form>
                        </td>
                        </tr>
                        <tr>
















                        
                            <th>Purple Ticket </th>
                            <td>At the very top of the theatre are the Balcony Seats.<br>
                                These can still offer great sight-lines of the stage and after the best value in the house.</td>
                            <td align="center"> Tickets availabe:<br>
                            <?php
                              
                              $movie=$_SESSION['movie'];
                              $con=new mysqli('localhost','root','','theater');
                             
                              $q="SELECT purple_tickets from movies where movie_name='$movie'";
                              $res=$con->query($q);
                              if($res->num_rows>0)
                              {
                                  while($row=$res->fetch_assoc())
                                  {
                                      $_SESSION['purple_tickets']=$row['purple_tickets'];
                                      echo $row['purple_tickets'];
                                  }
                              }
                              else echo $con->error;
                            ?>
                                
                            </td>
                            <td> Rs.300 </td>
                            <td>
                                <form method="post" action="payment1.php">
                                <br>    Quantity: <input type="number" name="quantity3" required><br>
                                    <input type="hidden" value="300" name="amount">
                                <br>    <center><input type="submit" value="BUY"></center>
                                </form>
                            </td>
                            </tr>
                </table>
        </div>
        <center><button type="button"><a href="movieform.html">BACK</a></button></center>
    </body>

</html>
