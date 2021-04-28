<!DOCTYPE html>
<html>
<head>

	<title>Value Insertion In CheckIn/Checkout Table</title>
	<style type="text/css">

		table{

			border-collapse: collapse;
			width: 100%;
			color: #d96459;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
           }
		th{
			background-color: #d96459;
			color: white;

		}

 tr:nth-child(even) {background-color: #f2f2f2}
	</style>
</head>
<body>

	<table>
		
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>EnteringTime</th>
			<th>LeavingTime</th>
		</tr>
	
	<?php
     $conn = mysqli_connect("localhost",  "talha1", "123");
     if($conn->connect_error){
     	die("Connection failed:". $conn->connect_error);
     }

 $sql ="SELECT Id,Username,EnteringTime,LeavingTime from check1";
 $result = $conn ->query($sql);

 if ($result->num_rows > 0) {
 	while ($row= $result->fetch_assoc()) {
   echo "<tr><td>". $row["Id"]."</td><td>" .$row["Username"]."</td><td>.".$row["EnteringTime"]."</td><td>.".$row["LeavingTime"]."</td></tr>";

 		
 	}
 	echo "</table>";
                		

 	}	
else{

echo "0 result";
}

$conn->close();
?>
</table>



</body>
</html>