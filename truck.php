<!DOCTYPE html>
<html lang="en">
   
    <head>
        <meta charset="UTF-8">
        <title>Muscle cars shop - вантажівка</title>
        <link href="styles/main.css" rel="stylesheet">
        <link href="styles/truck.css" rel="stylesheet">
    </head>
    
    <body>
        <table border="0px" width="100%" class="header-table">
            <tr id="headerTR">
                <hr>
            </tr>
            <tr>
                <td colspan="7">
                    <hr>
                    
                </td>
            </tr>
            <tr>
                <td colspan="7" align="center">
                    <h1>Моя вантажівка</h1>
                    <div id="truckDiv">
                        <?php
                            for($i = 0; $i < 5; $i++)
                            {
                                echo " 
                                    <div class='truckItem'>
                                        <table width='100%'>
                                            <tr>
                                                <td width='25%' rowspan='2'>
                                                    <a href='carpage.php?carName=Chevrolet Camaro SS 1969'><img src='images/barracuda1971.jpg' style='width: 100%'></a>
                                                </td>
                                                <td width='50%' colspan='3'>
                                                    <h3>Plymouth Barracuda 1971</h3>
                                                </td>
                                                <td width='25%' align='center'>
                                                    $<i>30000</i>
                                                </td>
                                            </tr>
                                            <tr align='center'>
                                                <td>370HP</td>
                                                <td>15`</td>
                                                <td>Black</td>
                                                <td>
                                                    <button class='countButton'>-</button>
                                                    <i>2</i>
                                                    <button class='countButton''>+</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                ";
                            }
                        ?>
                    </div>
                </td>
            </tr> 
            <tr>
                <td colspan="7">
                    <hr>
                </td>
            </tr>
            <tr id="footerTR">
                
            </tr>
            <tr>
                <td colspan="7">
                    <hr>
                </td>
            </tr>       
        </table>
        <script src="scripts/jquery.min.js"></script>
        <script src="scripts/main.js"></script>
    </body>
    
</html>