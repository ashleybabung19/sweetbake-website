<?php
    session_start();
    require("db_connect.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
<style type = "text/css">
    body{
    margin: 100px;
    }
    #container {
    width: 900px;
    margin-left: auto;
    margin-right: auto;
    }
    #container #left{
    width: 600px;
    float: right;
    }
    #container #right{
    width: 300px;
    float: right;
    }
    body{
	background-color: black;
    background-repeat: no-repeat;
	background-image: url(yums.jpg);
    background-size: cover;
    }
</style>
    <center><p style="color:  olive; font-family: brush script MT; font-size: 130px">Ashley's Sweet Desserts</p></center>
    <hr>
    <br>
    <table border="1">
        <th>
            <a style= "color: olive; font-family: lucida bright;" href="index_user.php">
                HOME
            </a>
        </th>
        <th>
            <a style= "color:  olive; font-family: lucida bright;" href="menu.php">
                MENU
            </a>
        </th>
        <th>
            <a style="color:  olive; font-family: lucida bright;" href="reserve.php">
                CLIENT RESERVATION
            </a>
        </th>
        <th>
            <a style="color: olive; font-family: lucida bright;" href="about.php">
                ABOUT
            </a>
        </th>
        <th>

        </a>
        </th>
    </table>
    <center><p style = "color:   olive; font-family: lucida bright; font-size: 25px;"><b>
        Location: Gumbauan Echague Isabela<br>
		Fb: J Ashley Faye<br>
		Gmail: ashleyfaye492@gmail.com<br>
        Number: 09875643569<br>

    </p></center>
</body>
</html>