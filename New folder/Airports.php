<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">
	<title>Airports</title>
	<style>
	table, th, td {	border: 1px solid black;
					border-collapse: collapse;}
	th, td{	padding: 5px;}
	th{	text-align: left;}

</style>
</head>
<body>
	<br>
	<table style="width:100%" class="table table-hover table-dark">
	<tr>
		<th scope="col">Code</th>
		<th scope="col">City</th>
		<th scope="col">Country</th>
	</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Airways";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "Select * from Airport";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>" . $row["Code"]."</td>"."<td>" . $row["city"]."</td>"."<td>" . $row["Country"]."</td>"."</tr>";
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