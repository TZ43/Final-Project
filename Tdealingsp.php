<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="">


<?php

if (isset($_GET["choice"])) {
	$option= $_GET["choice"];
	$c= count($option);
	$percentage= 0.0;  

	for ($i=0; $i<$c; $i++) { 
		
		if ($option[$i]==1) {
			$percentage=$percentage+25;
			echo "Selected for Food off<br>";
		}
		if ($option[$i]==2) {
			
			$percentage=$percentage+20;
			echo "Selected for Day spent<br>";
		}
		if ($option[$i]==3) {
			
			$percentage=$percentage+15;
			echo "Selected for Facility off<br>";
		}
		if ($option[$i]==4) {
			
			$percentage=$percentage+10;
			echo "Selected for Occasion off<br>";
		}


	}

	echo "Final percentage is: " .$percentage. "<br>";

	}
else{

   echo "Please choose something";

}
?>
<form>
<tr>

<a href = "Profile.php">Back</a>

</tr>
</form>


</body>
</html>
