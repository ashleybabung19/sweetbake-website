<?php
    if(isset($_REQUEST["id"])){
    
        require("db_connect.php");

        $id = $_REQUEST["id"];

        $sql = "DELETE FROM tblclient1 WHERE id = :recordid";

        $result = $conn->prepare($sql);
        $values = array(":recordid" => $id);

        $result->execute($values);

        if($result->rowCount()>0){
            echo "<script>alert('Record has been Deleted'); window.location = 'list_client.php';</script>";
        } else {
            echo "<script>alert('No record has been Deleted'); window.location = 'list_client.php';</script>";
        }
    }
?>