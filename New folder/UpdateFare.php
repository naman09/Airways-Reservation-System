<!DOCTYPE html>
<html>
<head>
	<title>Update Fare</title>
</head>
<body>
	<form method="POST" action="UpdateFare2.php" >
		From: <select name="Start">
			<option value="New Delhi">New Delhi</option>
			<option value="New York">New York</option>
			<option value="Tokyo">Tokyo</option>
		</select>
		To : <select name="End">
			<option value="New Delhi">New Delhi</option>
			<option value="New York">New York</option>
			<option value="Tokyo">Tokyo</option>
		</select> <br>
		Class: <select name="Class">
			<option value="Business">Business</option>
			<option value="Economy">Economy</option>
		</select><br>
		New Fare: <input type="integer" name="Fare"><br>
		<input type="Submit">
	</form>
	<button onclick="goBack()">Go Back</button>
	<script>
		function goBack() {
    		window.history.back();
		}
	</script>
</body>
</html>