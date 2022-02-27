
 <html>

<head>
    <title> Subscription Plans</title>
</head>

<body>
    <h1>
        <center>Membership Plans</center>
    </h1>
    <table border="2" align="left" width="350" height="250">
        <tr>
            <td>
                <h1>PLUS</h1>
                <ul>
                    <li>3 months validity</li>
                    <li>Free delivery upto 10 kms</li>
                    <li>Rs 10 delivery charges per km after 10kms</li>
                    <li>Cash Rewards</li>
                    <li>Upto 10% discount on every shopping</li>
                </ul><br>
                <h2>Rs. 500</h2><br>
                <form method="post" action="plus.php">
                    <input type="hidden" value="plus" name="plus">
                   <p> <input type="submit" value="SELECT PLUS" ></p>
                </form>
            </td>
        </tr>
    </table>
    <table border="2" align="center" width="350" height="250">
        <tr>
            <td>
                <h1>GOLD</h1>
                <ul>
                    <li>6 months validity</li>
                    <li>Free delivery upto 20 kms</li>
                    <li>Rs 10 delivery charges per km after 20kms</li>
                    <li>Cash Rewards</li>
                    <li>Upto 15% discount on every shopping</li>
                </ul><br>
                <h2>Rs. 1000</h2><br>
                <form method="post" action="gold.php">
                <input type="hidden" value="gold" name="gold">
                    <p><input type="submit" value="SELECT GOLD"  ></p>
                </form>
            </td>
        </tr>
    </table>
    <table border="2" align="right" width="350" height="250">
        <tr>
            <td>
                <h1>STAR</h1>
                <ul>
                    <li>12 months validity</li>
                    <li>Free delivery upto 50 kms</li>
                    <li>Rs 08 delivery charges per km after 50kms</li>
                    <li>Cash Rewards</li>
                    <li>Upto 25% discount on every shopping</li>
                    <li>Special offers on Sales</li>
                </ul><br>
                <h2>Rs. 2000</h2><br>
                <form method="post" action="star.php">
                <input type="hidden" value="star" name="star">
                   <p> <input type="submit" value="SELECT STAR" ></p>
                </form>
            </td>
        </tr>
    </table>


</body>

</html>