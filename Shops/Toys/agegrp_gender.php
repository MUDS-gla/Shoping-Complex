<html>
    <body>
        <?php
        
        echo "<bR><center><a href=javascript:history.go(-1)>Back</a></center>";
        ?>
        <form action=toys.php method=post>
            <table>
                <tr>
                    <td>Select Gender</td>
                    <td>
                        <input type=radio name=gender value='male'>Male</input>
                        <input type=radio name=gender value='female'>Female</input>
                        <input type=radio name=gender value='others'>Others</input>
                    </td>
                </tr>
                <tr>
                    <td>
                        Select age group
                    </td>
                    <td>
                        <select>
                            <option value=''>Select</option>
                            <option value='child'>Toys for Infants (0-2 years)</option>
                            <option value='teen'>Toys for Toddlers (2-4 years)</option>
                            <option value='adult'>Toys for Kindergartners (4-6 years)</option>
                            <option value='middle'>Toys for school-going children (6+ years)</option>
                            <option value='old'>Old person</option>
                
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type=submit value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>