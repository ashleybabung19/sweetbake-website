<?php
    session_start();
    include("db_connect.php");
    include("function.php");
    $user_data = check_login($conn);
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        background-color:aqua;
        background-repeat: no-repeat;
		background-image: url(hm.jpg);
		background-size: cover;
	}
</style>
<center><p style="color:  pink; font-family: times-newroman; font-size: 130px">Ashley's Sweet Desserts</p></center>
    <hr>
    <br>
    <table border="1">
        <th>
            <a style= "color:  pink; font-family: lucida bright;" href="index_user.php">
                HOME
            </a>
        </th>
        <th>
            <a style= "color:  pink; font-family: lucida bright;" href="menu.php">
                MENU
            </a>
        </th>
        <th>
            <a style="color:  pink; font-family: lucida bright;" href="reserve.php">
            CLIENT RESERVATION
            </a>
        </th>
        <th>
            <a style="color:  pink; font-family: lucida bright;" href="about.php">
                ABOUT
            </a>
        </th>
        <th>
        </th>
    </table>
</body>
</html>