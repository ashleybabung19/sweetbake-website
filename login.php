<?php
session_start();
require("db_connect.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password))
    {
        
        $sql = "SELECT * FROM tblusers WHERE user_name = '$user_name' limit 1 ";

        $result = $conn->prepare($sql);
            
        if($result->rowCount()>0) {
                $row = $result->fetch(PDO::FETCH_ASSOC);
                
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("location:index_user.php"); exit();
            
                }
        }
        
    } 
    else {
        echo "Please enter some valid information!";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style type = "text/css">
    body {
        margin: 100px;
    } 
    #text{
        height: 20PX;
        border-radius: 7px;
        padding: 5px;
        border: solid thin #aaa;
        width: 30%;
    }
    #button {
        padding: 20px;
        width: 500px;
        color: black;
        background-color: white;
        border: none;
    }
    body {
        background-repeat: no-repeat;
		background-image: bake.img;
		background-size: cover;
	}
    </style>
    <div id = "box">
       <center> <form method = "post" action = "index_user.php">
            <div style="font-size: 20px; margin: 10px; color: white;">Login</div>
            <input id="text" type = "text" name = "user_name" placeholder = "Please input username"><br><br>
            <input id="text" type = "password" name = "password" placeholder = "Please input password"><br><br>

            <input id="button" type = "submit" value = "Login"><br><br>

        </form>
    </div>
</body>
</html>