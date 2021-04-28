<!DOCTYPE html>
<html>
<head>
<body>
<table>
<tr>
<th>SerialNo</th>
<th>UserName</th>
<th>FoodType</th>
<th>Price</th>
</tr>
<?php

 $conn = mysqli_connect("localhost","tal23","tal23","check");

if($_SERVER["REQUEST_METHOD"] == "GET") {

$searchKey = $_GET['searchKey'];
$sql = "SELECT * FROM dinning WHERE SerialNo = " . $searchKey;

 if(empty($searchKey)) {
$sql = "SELECT * FROM dinning";
}
$conn = mysqli_connect("localhost","tal23","tal23","check");

if($conn -> connect_error) {
echo "Failed to connect database!";
}
else {
$result = $conn -> query($sql);

 if($result -> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
echo "<tr><td>" . $row["SerialNo"] ."<td>" . $row["UserName"] ."<td>" . $row["FoodType"] ."<td>". $row["Price"] ."<td>";
}
echo "<br>";

 }
else {
echo "Record can not found";
}
}
$conn -> close();
}

?>
</table>

</body>
</head>
</html>