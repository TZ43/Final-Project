<!DOCTYPE html>
<html>
<head>
<body>
<table>
<tr>
<th>SerialNo</th>
<th>UserName</th>
<th>BedType</th>
<th>TotalDay</th>
<th>PaymentType</th>
</tr>
<?php

 $conn = mysqli_connect("localhost","tal23","tal23","receptionist");

if($_SERVER["REQUEST_METHOD"] == "GET") {

$searchKey = $_GET['searchKey'];
$sql = "SELECT * FROM pay WHERE SerialNo = " . $searchKey;

 if(empty($searchKey)) {
$sql = "SELECT * FROM pay";
}
$conn = mysqli_connect("localhost","tal23","tal23","receptionist");

if($conn -> connect_error) {
echo "Failed to connect database!";
}
else {
$result = $conn -> query($sql);

 if($result -> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
echo "<tr><td>" . $row["SerialNo"] ."<td>" . $row["UserName"] ."<td>" . $row["BedType"] ."<td>". $row["TotalDay"] ."<td>". $row["PaymentType"] ."<td>";
}
echo "<br>";

 }
else {
echo "Record can not be found";
}
}
$conn -> close();
}

?>
</table>

</body>
</head>
</html>