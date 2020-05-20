<!DOCTYPE html>
<html>
<head>
	<title>Flight</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">
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
		<th>Flight Number</th>
		<th>From</th>
		<th>To</th>
		<th>Departure Time</th>
		<th>Arrival Time</th>
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

$sql = "Select * from flight";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo "<tr>"."<td>" . $row["F_no"]."</td>"."<td>" . $row["Start"]."</td>"."<td>" . $row["End"]."</td>"."<td>" . $row["Dep_time"]."</td>"."<td>" . $row["Arr_time"]."</td>"."</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
</table>
<button onclick="goBack()">Go Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>