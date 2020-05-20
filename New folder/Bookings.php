<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
</head>
<body>
	<form method="POST" action="Bookings2.php">
		Flight Number: <select name="FlightNum">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select>
		<br><br>
		<input type="submit">
	</form>
	<button onclick="goBack()">Go Back</button>
	<script>
		function goBack() {
    		window.history.back();
		}
	</script>
</body>
</html>