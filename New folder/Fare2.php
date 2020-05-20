<!DOCTYPE html>
<html>
<head>
	<title>Fare2</title>
</head>
<body>
	<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Airways';
$conn = mysqli_connect('localhost', 'root', '','Airways');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$choice1=mysqli_real_escape_string($conn,$_POST['Start']);
$choice2=mysqli_real_escape_string($conn,$_POST['End']);
$choice3=mysqli_real_escape_string($conn,$_POST['Class']);
if($choice1==$choice2) {
	echo "<script>
		alert('Invalid Selection');
		window.history.back();
	</script>";
}
$sql = "Select * from Fare,Flight where Fare.FlightNum=Flight.F_no and Start = '".$choice1."' and End = '".$choice2."' and Class = '".$choice3."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo "<div style='border:3px solid black;text-align:center;font-size:35px'>$".$row["FareAmount"]."</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<button onclick="goBack()">Go Back</button>
	<script>
		function goBack() {
    		window.history.back();}
	</script>
</body>
</html>