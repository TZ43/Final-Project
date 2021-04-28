<?php


 session_start();
?>


<?php
$username = $password = $npassword = "";
$usernameerr = $passworderr = $npassworderr = "";


 $hostname = "localhost";
$username = "zub123";
$password = "zub123";
$dbname = "check";


 // Mysqli Procedural
$conn2 = mysqli_connect($hostname, $username, $password, $dbname);


if($_SERVER['REQUEST_METHOD'] == "POST") {


 if(empty($_POST['username'])) {
$usernameerr = "Please Fill up the Username!";
}
else
{
$username=$_POST['username'];
}


 if(empty($_POST['password'])) {
$passworderr = "Please Fill up the password!";
}


 else
{
$password=$_POST['password'];
}


 if(empty($_POST['npassword'])) {
$npassworderr = "Please Fill up the new password!";
}


 else
{
$npassword=$_POST['npassword'];
}


 if($usernameerr ==""&& $passworderr=="" && $npassworderr==""){


 $username = $_POST['username'];
$password = $_POST['password'];
$npassword= $_POST['npassword'];


$query= mysqli_query($conn2,"Select * from check1 where password= '$password' ");
$num = mysqli_fetch_array($query);
if($num>0){
if(mysqli_connect_error()) {
echo "2. Database Connection Failed!...";
echo "<br>";
echo mysqli_connect_error();
}
else {



 if($_POST['username'] == $_SESSION['user']){



$stmt2 = mysqli_prepare($conn2, "update check1 set Password = ? where User = ? ");
mysqli_stmt_bind_param($stmt2, "ss", $p3, $p4 , );
$p3 = $_POST['npassword'];
$p4 = $_POST['username'];
$res = mysqli_stmt_execute($stmt2);


 if($res) {
header("Location: Profile.php ");
exit();
}
else {
echo "Failed to Update Data.";
echo "<br>";
echo $conn2->error;
}
}
else{
$usernameerr= "Type your own username";
}


}
}


 else{


 $passworderr= "Correct your old password";
}
mysqli_close($conn2);
}
}




?>
<!DOCTYPE html>
<html>
<head >
<title>Sign in </title>
<h1 style="padding:1px; color:#2B1B17;font-size: 40px;font-family: bodoni mt black;"><center><?php echo "Welcome ". $_SESSION['user']; ?></center></h1>
<body background="po.jpg">
<div class="loginbox">


<h1>Change Password</h1><br>
<form name ="jsForm"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" onsubmit="return validate()" method="post"><b>



<p>Username</p>
<label for="username"></label>
<input type="text" name="username" id="username" placeholder="Enter a UserName" value="<?php echo $username ?>">
<p class="o"><?php echo $usernameerr; ?></p>
<br><br>


 <p>Password</p>
<label for="password"></label>
<input type="password" id="password" name="password"
placeholder="Enter your old Password" value="<?php echo $password ?>">
<p class="o"> <?php echo $passworderr; ?></p><br><br>


 <p> New Password</p>
<label for="npassword"></label>
<input type="password" id="npassword" name="npassword"
placeholder="Enter your new Password" value="<?php echo $npassword ?>">
<p class="o"> <?php echo $npassworderr; ?></p><br><br>


 </b>
<input type="submit" value="submit">


 </font>
</head>


</form>
</div>

<p id = "errorMsg"></p>
<script>
function validate(){
var isValid= false;
var username= document.forms["jsForm"]["username"].value;

 var password= document.forms["jsForm"]["password"].value;

 var npassword= document.forms["jsForm"]["npassword"].value;

if (username == "" ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up USERNAME Properly </b>";

document.getElementById('errorMsg').style.color="yellow";

}

 else if (password == "" ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up Password Properly </b>";

document.getElementById('errorMsg').style.color="yellow";

}

else if (npassword== "" ){
document.getElementById('errorMsg').innerHTML ="<b>Please fill up New Password Type Properly </b>";

document.getElementById('errorMsg').style.color="yellow";

}

else{
isValid = true;
}

 return isValid;
}

</script>




</body>
</html>