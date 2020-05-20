<!DOCTYPE html>
<html>
<head>
	<title>Ticket Booking</title>
</head>
<body>
	<form action="Ticket Booking.php" method="POST">
		Name: <input type="text" name="Name"> <br>
		Date of Birth: <input type="date" name="Dob" max="2006-01-01"> <br>
		Contact: <input type="text" name="Contact"> <br>
		<button><a href="Flight.php" style="text-decoration: none;">See Flights</a></button><br>
		<!-- <form action="Flight.php" method="GET"><button>See Flights</button></form> -->
		Flight Number: <select name="fno">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select> <br>
		Class: <select name="class">
			<option value="Business">Business</option>
			<option value="Economy">Economy</option>
		</select> <br>
		<button type="submit" name="Submit">Submit</button> 
	</form>
	<form action="Passenger Page.php" method="POST"> <button>Go Back</button></form>

<?php
	echo "<script type='text/javascript'>console.log('Hello');</script>";
	$p1 = $p2 = $p3 = False;

	function alert($msg) {
    	$flag=FALSE;
    	echo "<script type='text/javascript'>alert('$msg');</script>";
	}


	if(isset($_POST['Submit'])){

		session_start();

		$name = $_POST["Name"];
		$contact=$_POST["Contact"];
		$dob=$_POST["Dob"];
	
		if (empty($name))  alert("Name is required");
		elseif(!preg_match("/^[a-zA-Z][a-zA-Z\\s]+$/",$name)) alert("Only letters are allowed"); 
    	else $p1=True;
	
		if (empty($contact)) alert("Contact is required");
		elseif (preg_match("/[^0-9]/",$contact)) alert("Only numbers are allowed"); 
   		else $p2 = True;

		if(empty($dob)) alert("Dob is required");
		else $p3=True;

		$_SESSION["Name"] = $name;
		$_SESSION["Contact"] = $contact;
		$_SESSION["Dob"] = $dob;

		$_SESSION["fno"] = $_POST["fno"];
		$_SESSION["class"] = $_POST["class"];

		if($p1 and $p2 and $p3)
		{
			header('Location:Success.php');
        	die();
		}

		
	}

?>


</body>
</html>