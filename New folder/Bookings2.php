<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">
	<title>Bookings 2</title>
	<style>
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	th, td{
		padding: 5px;
	}
	th{
		text-align: left;
	}
</style>
</head>
<body>
	<br>
	<table style="width:100%" class="table table-hover table-dark">
	<tr>
		<th scope = "col">Name</th>
		<th scope = "col">Contact</th>
		<th scope = "col">Class</th>
		<th scope = "col">Booking Time</th>
	</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Airways";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$choice1=mysqli_real_escape_string($conn,$_POST['FlightNum']);

//show booking time(Clock) here also from Booking relation
$sql = "Select name,contact,class,clock from Booking where Flight_no = '".$choice1."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        //echo "id: " . $row["name"]. " - Name: " . $row["dob"]. " " . $row["contact"].$row["class"]. "<br>";

        echo "<tr>"."<td>" . $row["name"]."</td>"."<td>" . $row["contact"]."</td>"."<td>" . $row["class"]."</td>"."<td>" . $row["clock"]."</td>"."</tr>";

    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
<br>
<button onclick="goBack()">Go Back</button>
	<script>
		function goBack() {
    		window.history.back();
		}
	</script>
</body>
</html>