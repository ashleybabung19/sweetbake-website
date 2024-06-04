<?php
if(isset($_POST["btnsave"])){
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
		echo "Please input a valid Number of clients!";
	} else if($date == ""){
		echo "Please input a valid Date!";
	}else if($time == ""){
		echo "Please input a valid Time!";
	} else {

    require("db_connect.php");
    
    $sql = "INSERT INTO tblclient1(name, phone, clients, date, time) VALUES (:name, :phone, :clients, :date, :time)";

    $result = $conn->prepare($sql);
    $values = array(":name" => $name, ":phone" => $phone, ":clients" => $clients, ":date" => $date, ":time" => $time);

    $result->execute($values);

    if($result->rowCount()>0){
        
    	echo "<script>alert('Record has been saved!'); window.location = 'list_client.php';</script>";
		} else {
			echo "<script>alert('No record has been saved!');</script>";
		}
		
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
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        width: 100%;
        background-color:pink;
    }
    #button {
        padding: 25px;
        width: 200px;
        color: olive
        ;
        background-color:pink;
        border: none;
    }

    body {
		  background-color: black;
        background-repeat: no-repeat;
		background-image: url(y.jpg);
        background-size: cover;
    }
 </style>
        <center><p style="color: pink; font-family: brush script MT; font-size: 130px">Ashley's Sweet Desserts</p></center>
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
    </style>
    <div id = "box">
        <form method = "post">
        <center><table></center>
            <div style="font-size: 50px; color:  pink
            ;">Reservation Form</div>
            <tr>
					<td style = "color: white
                    ; family-font: Candara; font-size: 30px;">Full name of Client:</td>
					<td><input id = "text" type= "text" name="txtname" placeholder="Last name, First name Middle Initial"></td><br>
				</tr>
						
               	<tr>
                	<td style = "color: white
                    ; family-font: Candara; font-size: 30px;">Contact number:</td>
					<td><input id = "text" type="text"name="txtgue" placeholder="ex.no.0964324XXXX."></td><br>
          

                <tr>
                    <td style = "color: white
                    ; family-font: Candara; font-size: 30px;">Number of Desserts:</td>
                 <td><input id = "text" type="number" name="txtnum" placeholder="ex.1,2,3...."></td><br>
				</tr>
				
				<tr>
                    <td style = "color:  white
                    ; family-font: Candara; font-size: 30px;">Date of delivery:</td>
                    <td><input id = "text" type="date"name="txtdate" placeholder="MM/DD/YY" ></td><br>
                </tr>

               	<tr> 
                    <td style = "color: white
                    ; family-font: Candara; font-size: 30px;">Time of delivery:</td>
                    <td><input id = "text" type="time"name="txttime" ></td><br><br>
                </tr>

                
</table><br><br>
<center><td colspan = "1"><input id="button" type="submit" value="Save" name = "btnsave"></td></center>
        </form>
    </div>
   
</body>
</html>