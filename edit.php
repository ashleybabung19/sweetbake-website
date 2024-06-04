<?php
require("db_connect.php");
    

if(isset($_POST["btnsave"])){
    
    $id = $_POST["id"];
    $name = $_POST["txtname"];
    $phone = $_POST["txtnum"];
    $clients = $_POST["txtgue"];
    $date = $_POST["txtdate"];
    $time= $_POST["txttime"];

    if($name == ""){
		echo "Please input a valid Name!";
	} else if($phone == ""){
		echo "Please input a valid Phone Number!";
	} else if($clients == ""){
		echo "Please input a valid Number of Orders!";
	} else if($date == ""){
		echo "Please input a valid Date!";
	}else if($time == ""){
		echo "Please input a valid Time!";
	} else {

    
    $sql = "UPDATE tblclient1 SET name = :name, phone = :phone, clients = :clients, date = :date, time = :time WHERE id = :recordid";

    $result = $conn->prepare($sql);
    $values = array(":name" => $name, ":phone" => $phone, ":clients" => $clients, ":date" => $date, ":time" => $time, ":recordid" => $id);

    $result->execute($values);

    if($result->rowCount()>0){
        
    	echo "<script>alert('Record has been saved!'); window.location = 'list_client.php';</script>";
		} else {
			echo "<script>alert('No record has been saved!');</script>";
		}
		
    }
}
?>
<html>
<head>
     <title>Edit Record</title>
	 <link rel="stylesheet" type="text/css" href="indexx.css">
</head>
<body>
    <?php
    $sql = "SELECT * FROM tblclient1 WHERE id = :recordid";

    $id = "";
    $name = "";
    $phone = "";
    $clients = "";
    $date = "";
    $time = "";


    $res = $conn->prepare($sql);
    $value = array(":recordid" =>$_REQUEST["id"]);
    try{
    
    $res->execute($value);

    if($res->rowCount()>0) {

        $row = $res->fetch(PDO::FETCH_ASSOC);
            $id = $row["id"];
            $name = $row["name"];
            $phone = $row["phone"];
            $clients = $row["clients"];
            $date = $row["date"];
            $time = $row["time"];
    }
} catch(PDOException $e) {
    die("An error has been occured");
} 
catch(PDOException $e) {
    die("An error has been occured");
}

    ?>
   
        <form action = "edit.php" method = "post">
        <input type = "hidden" name = "id" value = "<?php echo $id ?>"
		<fieldset>
		<center><table></center>
		<center><h2>Edit Record</h2></center>
		<div id='container'>
		
				<tr>
					<td>Full Name:</td>
					<td><input type= "text" value = "<?php echo $name; ?>" name="txtname" placeholder="Last name, First name Middle Initial"></td><br>
				</tr>
						
               	<tr>
                	<td>Mobile/Phone Number:</td>
                    <td><input type="number" value = "<?php echo $phone; ?>" name="txtnum" ></td><br>
               	</tr>

                <tr>
                    <td>Number of Cakes:</td>
                    <td><input type="text" value = "<?php echo $clients; ?>" name="txtgue" ></td><br>
				</tr>
				
				<tr>
                    <td>Date of Reservation:</td>
                    <td><input type="date" value = "<?php echo $date; ?>" name="txtdate" placeholder="MM/DD/YY" ></td><br>
                </tr>

               	<tr> 
                    <td>Time of Reservation:</td>
                    <td><input type="time" value = "<?php echo $time; ?>" name="txttime" ></td><br>
                </tr>

				
        </div>
</table>

<center><td colspan = "2"><input type="submit" value="SAVE" name = "btnsave"></td></center>
</div>
</fieldset>			
</form>
</body>
</html>