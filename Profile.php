<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><meta charset="utf-8">
<title>The Website of Talha Zubaer</title>
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" href="Tprofile.css" /> 
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

		<nav>
		<input type="checkbox" id= "check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
		<label class="logo">Welcome to Receptionist Page</label>
		<ul>
			<li><a class="active" href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">More</a></li>
			<li><a href="#"> Profile Details</a></li>
		</ul>

                 
	</nav>

	
 <font size="5" color="White">
<center>
<?php echo $_SESSION['user'] ?> 
</center>
</font>

    <br>
    <br>
    <br>
    <br>
<center>
<button onclick="window.location.href='TCheckInOut.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Check in/Check out</button>
<br>
<br>

<button onclick="window.location.href='TFood.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Food Details</button>
<br>
<br>
 
<button onclick="window.location.href='TUserDetails.html'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">User Details</button>

<br><br>
<button onclick="window.location.href='Troomcleaning.php'" style="font-family: 'Cooper Black'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Room Cleaner</button>
<br>
<br>

<button onclick="window.location.href='Tpayment.html'" style="font-family: 'Cooper Black'; font-size: 16px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Payment History</button>
<br>
<br>

<button onclick="window.location.href='Tdealingsp.html'" style="font-family: 'Cooper Black'; font-size: 16px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Dealing Special Request</button>
<br>
<br> 

<button onclick="window.location.href='Tcomplain.php'" style="font-family: 'Cooper Black'; font-size: 16px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Complain and Problem</button>
<br>
<br> 
<button onclick="window.location.href='Tchangepassword.php'" style="font-family: 'Cooper Black'; font-size: 16px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Change Password</button>
<br>
<br> 


<button onclick="window.location.href='Tlogout.php'" style="font-family: 'Cooper Black'; font-size: 16px; width: 200px; height: 40px;  color:black;  background:cyan; border-color:black;">Logout</button>
<br>
<br> 



</center>
</b>


                    <div id="footer">
                            Copyright &copy; 2021 Talha Zubaer
                    </div>
 
 
</body>
</html>
