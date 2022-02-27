<html>
    <body>
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
                            <option value='child'>child</option>
                            <option value='teen'>Teen ager</option>
                            <option value='adult'>Adult</option>
                            <option value='middle'>Middle aged</option>
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