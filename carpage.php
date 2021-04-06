<!DOCTYPE html>
<html lang="en">
   
    <head>
        <meta charset="UTF-8">
        <title>Muscle car</title>
        <link href="styles/main.css" rel="stylesheet">
        <link href="styles/carpage.css" rel="stylesheet">
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
                <td colspan="7">
                    <h1 id="labelText"></h1>
                    <table width="100%" border="0px">
                        <tr>
                            <td width="50%" rowspan="2">
                                <img src="images/camaross1969.jpg" class="mainImg">
                            </td>
                            <td width="50%">
                                <div class="descriptionDiv">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit unde, excepturi tempora ipsum vero quae et corporis sit numquam ab cumque alias fugit, incidunt consequuntur! Voluptas voluptatem, sint, veniam, voluptate suscipit eos aliquam animi aspernatur voluptatibus molestiae vel impedit eius autem perspiciatis nisi! Odit fugit quaerat laboriosam maxime et quo quod molestias cum optio nemo maiores deleniti necessitatibus veniam ipsum totam, minus amet dolor iusto ut similique sit porro repudiandae. Optio corporis rerum autem provident cum veritatis beatae ipsa suscipit, quis. Fugiat totam distinctio, quidem earum esse nam? Sequi repellendus ipsa molestias aspernatur, veritatis, cumque aperiam iusto distinctio corporis voluptates?
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="50%" align="left">
                                <div class="statsDiv">
                                    <h3><b>Характеристики:</b></h3>
                                    <h3>Мотор - <i>V8 396HP</i></h3>
                                    <h3>Диски - <i>15'</i></h3>
                                    <h3>0-60 - <i>6.5s</i></h3>
                                    <h3>Ціна - <i id="priceText">30000</i></h3>
                                </div>
                                <button id="buyButton" class="buyButton">Додати до вантажівки</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                
                                
                                
                                <table>
                                    <tr>
                                        <td>
                                            <button id="leftBSlider" align="left">&#60;</button>
                                        </td>
                                        <td>
                                            <div id="slider">
                                                <div id="line">
                                                    <img src="images/camaross1969.jpg" alt="">
                                                    <img src="images/camaross1969.jpg" alt="">
                                                    <img src="images/camaross1969.jpg" alt="">
                                                    <img src="images/camaross1969.jpg" alt="">
                                                    <img src="images/camaross1969.jpg" alt="">
                                                    <img src="images/camaross1969.jpg" alt="">
                                                    <img src="images/camaross1969.jpg" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button id="rightBSlider">&#62;</button>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr> 
            <tr>
                <td colspan="7" align="center">
                    <h1>Відгуки про даний автомобіль</h1><br>
                    
                    <?php
                        
                        for($i = 0; $i < 5; $i++)
                        {
                            echo "
                                <div class='commentDiv'>
                                    <table>
                                        <tr>
                                            <td width='10%' rowspan='2'>
                                                <img src='images/account.png'>
                                            </td>
                                            <td width='85%'>
                                                <b>Коментар було залишено 10.03.2022</b>
                                            </td>
                                            <td width='5%' rowspan='2' align='center'>
                                                <img src='images/like.png'>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam animi ratione, unde harum perferendis corporis quam accusantium repellat in blanditiis, iste. Facilis nesciunt fugiat, praesentium similique accusamus ullam unde optio dolor dolore asperiores, aliquam voluptatibus, vel vero excepturi maiores quo eaque autem beatae reiciendis ex mollitia ducimus consectetur eligendi. Possimus tenetur dignissimos dicta cupiditate, temporibus libero vero dolor debitis unde aut, explicabo enim veniam! Qui accusantium repellendus molestiae necessitatibus, aliquam, dolor exercitationem, cumque pariatur incidunt dolores sit veniam doloribus numquam optio id minus magni dolorum quod saepe minima tempore blanditiis reiciendis quis nesciunt ab. Necessitatibus sit minima mollitia est sunt.
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            ";
                        }
                    ?>
                    
                    
                    <div id="leaveCommentDiv">
                        <form method="get">
                            <h2 style="margin: 20px;"><i>Залишіть свій відгук</i></h2>
                            <textarea id="" cols="30" rows="10"></textarea>
                            <input type="radio" name="comment" id="goodOption" checked><label for="goodOption">Добре</label>
                            <input type="radio" name="comment" id="badOption"><label for="badOption">Погано</label><br>
                            <button>Залишити відгук</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="7">
                    <hr>
                </td>
            </tr>
            <tr id="footerTR">
                
            <tr>
                <td colspan="7">
                    <hr>
                </td>
            </tr>       
        </table>
        <div id="optionsDiv" class="hidden">
            <h1>Опції</h1>
            <form>
                <h2 style="margin: 10px;">Колір:</h2>
                <input type="button" name="carColor" id="redCC" class="radioColor">
                <input type="button" name="carColor" id="greenCC" class="radioColor">
                <input type="button" name="carColor" id="blueCC" class="radioColor">
                <input type="button" name="carColor" id="blackCC" class="radioColor"><br>
                <h2 style="margin: 10px;">Двигун:</h2>
                <input type="button" value="426 HEMI" class="engineButton">
                <input type="button" value="426 HEMI" class="engineButton">
                <input type="button" value="426 HEMI" class="engineButton"><br>
                <h2 style="margin: 10px;">Диски:</h2>
                <input type="button" value="13" class="engineButton">
                <input type="button" value="14" class="engineButton">
                <input type="button" value="15" class="engineButton">
            </form>
            <button onclick="location.replace('truck.html')" class="buyButton">Вибрати</button>
        </div>
        <script src="scripts/jquery.min.js"></script>
        <script src="scripts/main.js"></script>
        <script src="scripts/carpage.js"></script>
    </body>
    
</html>