<!DOCTYPE html>
<html>
<head>
<body>
<table>
<tr>
<th>SerialNo</th>
<th>FirstName</th>
<th>LastName</th>
<th>BirthDate</th>
<th>Gender</th>
<th>Address</th>
<th>Phone</th>
<th>Email</th>
<th>UserName</th>

</tr>
<?php

 $conn = mysqli_connect("localhost","tal23","tal23","receptionist");

if($_SERVER["REQUEST_METHOD"] == "GET") {

$searchKey = $_GET['searchKey'];
$sql = "SELECT * FROM user1 WHERE SerialNo = " . $searchKey;

 if(empty($searchKey)) {
$sql = "SELECT * FROM user1";
}
$conn = mysqli_connect("localhost","tal23","tal23","receptionist");

if($conn -> connect_error) {
echo "Failed to connect database!";
}
else {
$result = $conn -> query($sql);

 if($result -> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
echo "<tr><td>" . $row["SerialNo"] ."<td>" . $row["FirstName"] ."<td>" . $row["LastName"] ."<td>". $row["BirthDate"] ."<td>". $row["Gender"] ."<td>". $row["Address"] ."<td>". $row["Phone"] ."<td>". $row["Email"] ."<td>". $row["UserName"] ."<td>" ;
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