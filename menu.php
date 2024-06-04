<?php
    session_start();
    require("db_connect.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
<style type = "text/css">
    body {
        margin: 100px;
    } 

    #button {
        padding: 10px;
        width: 150px;
        color: white
        ;
        background-color:aqua;
        border: none;
    }

    body {
        background-color: aqua;
        background-repeat: no-repeat;
		background-image: url(h.jpg);
        background-size: cover;
    }
</style>
<center><p style="color: pink; font-family: brush script MT; font-size: 130px">Ashley's Sweet Desserts</p></center>
    <hr>
    <br>
    <table border="1">
        <th>
            <a style= "color:pink; font-family: lucida bright;" href="index_user.php">
                HOME
            </a>
        </th>
        <th>
            <a style= "color:pink; font-family: lucida bright;" href="menu.php">
                MENU
            </a>
        </th>
        <th>
            <a style="color:pink; font-family: lucida bright;" href="reserve.php">
            CLIENT RESERVATION
            </a>
        </th>
        <th>
            <a style="color:pink; font-family: lucida bright;" href="about.php">
                ABOUT
            </a>
        </th>
        <th>

    </table>
    <a style = "color:Chocolate; font-family: lucida bright; font-size: 40px;"><b>
	<left><h1>All offered Home-made Dessert:<br><br>
	~Doughnuts flavors~ <br> <br>
	299 PER BOX(6PCS)<br>
	1.Matcha <br>
	2.Chocolate <br>
	3.Caramel<br>
	4.Melon<br>
	5.Strawberry<br>
    6.Ube<br>
    7.Cakes<br>
    8.Cheese cakes<br>
    9.Smokey cakes<br>
    10.Carrot cakes<br>
	
	
	</table>
    <a style = "color:Chocolate; font-family: lucida bright; font-size: 20px;"><b>
	<left><h1>MILKTEA 16OZ 60php    22OZ  100php:<br><br>
	1.Matcha  16oz 220z<br>
	2.Strawberry Bomb 16oz 220z<br>
	3.Caramel Machiatto 16oz 220z<br>
	4.Melone bomb  16oz 220z<br>
	5.Strawberry cheese 16oz 220z<br>
    6.Ube  16oz  220z<br>
    7.Avocado milk 16oz 220z<br>
   
  
</body>
</html>