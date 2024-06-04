<?php 

function check_login($conn)
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $sql = "SELECT * From tbluser1 where user_id = '$id' limit 1";

        $result = $conn->prepare($sql);
        if($result->rowCount()>0){
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $user_data;
        }
    }
    
}

function random_num($leght)
{
    $text =  "";
    if($length < 5 )
    {
        $length = 5;
    }

    $len = rand(4,$length);

    for ($i=0; $i < $len; $i++)
    {
        $text .= rand(0,9);
    }
    return $text;
}