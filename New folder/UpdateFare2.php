<!DOCTYPE html>
<html>
<head>
	<title>UpdateFare2</title>
</head>
<body>
	<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Airways';

// Create connection
$conn = mysqli_connect('localhost', 'root', '','Airways');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$choice1=mysqli_real_escape_string($conn,$_POST['Start']);
$choice2=mysqli_real_escape_string($conn,$_POST['End']);
$choice3=mysqli_real_escape_string($conn,$_POST['Class']);
$choice4=mysqli_real_escape_string($conn,$_POST['Fare']);
if($choice1==$choice2) {
	echo "<script>
		alert('Invalid Selection');
		window.history.back();
	</script>";
}

$sql = "Update Fare,Flight set FareAmount=".$choice4." where Fare.FlightNum=Flight.F_no and Start = '".$choice1."' and End = '".$choice2."' and Class = '".$choice3."'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "Fare updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<button onclick="goBack()">Go Back To Home</button>
	<script>
		function goBack() {
    		window.history.back();
			window.history.back();
		}
	</script>
	<!-- show fare of the selected Travel from table Fare-->
</body>
</html>