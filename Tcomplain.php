<html>
<head>
    <title>
        Complain
    </title>
</head>
<body background="white.jpg">
    <table border="2">
        <tr>
            <th> UserId</th>
            <th> Rating</th>
            <th> Comment</th>
           
        </tr>
 
<?php
$conn= mysqli_connect("localhost","tal23","tal23","check");
if($conn->connect_error){
 
    die("Connection failed:". $conn-> connect_error);
}
 

$sql = "SELECT UserId,Rating,Comment from complain ";
$result = $conn-> query($sql);
 
if($result-> num_rows > 0){
 
    while ($row = $result-> fetch_assoc()){
echo "<tr><td>". $row["UserId"] . "</td><td>". $row["Rating"] . "</td><td>". $row["Comment"] . "</td> </tr>";
 
        
 

    }
    echo "</table>";
}
else{
    echo "0 result";
}
$conn-> close();
 
?>
</table>
</body>
</html>