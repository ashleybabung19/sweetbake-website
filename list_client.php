<?php

require("db_connect.php")

?>
<head>
    <title>List of client</title>

</head>
<center><h1>List of Reservation</h1></center>
<div class = "container">
<b><a class = 'btn btn-primary' href = "reserve.php">RESERVATION</a>
<b><a class = 'btn btn-info' href = "index_user.php">HOME</a>
<b><a class = 'btn btn-info' href = "menu.php">MENU</a>   

<table class = "table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PHONE NUMBER</th>
            <th>NUMBER OF CAKES</th>
            <th>DATE</th>
            <th>TIME</th>
        </tr>
    </thead>
    <body>
</div>
<?php
    $sql = "SELECT * FROM tblclient1";

    $res = $conn->prepare($sql);
    
    $res->execute();

    if($res->rowCount()>0) {

        $i=1;
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>      
                        <td>" . $i . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['phone'] . "</td>
                        <td>" . $row['clients'] . "</td>
                        <td>" . $row['date'] . "</td>
                        <td>" . $row['time'] . "</td>
                        <td><a class = 'btn btn-warning' href = 'edit.php?id= " .$row['id']. "'>EDIT</a>  <a class = 'btn btn-danger' href = 'delete.php?id=" . $row['id'] . "'>DELETE</a></td>";
						$i++;
        }
    }
?>        
    </body>
</table>