<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
</head>
<body>
	
<!-- Enter the values in the Passenger table here -->
<?php

  $conn = mysqli_connect('localhost', 'root', '','Airways');
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  session_start();
  $var1 = mysqli_real_escape_string($conn,$_SESSION["Name"]);
  $var3 = mysqli_real_escape_string($conn,$_SESSION['fno']);
  $var4 = mysqli_real_escape_string($conn,$_SESSION['Contact']);
  $var2 = mysqli_real_escape_string($conn,$_SESSION['Dob']);
  $var5 = mysqli_real_escape_string($conn,$_SESSION['class']);


  $sql = "Insert into Passenger(Name,dob) values('".$var1."','".$var2."')";

  if ($conn->query($sql) === TRUE) {
    echo "Passenger record created successfully<br>";
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $sqly = "SELECT max(P_id) FROM Passenger";


  if ($result=mysqli_query($conn,$sqly))
  {
    // Fetch one and one row
    while ($row=mysqli_fetch_row($result))
    {
      $varx = $row[0];
    }
    mysqli_free_result($result);
  }
  // set the clock
  $time=date('Y-m-d h:i:s', time());

  $sqlC = "insert into Contacts values (".$varx.",'".$var4."')";

  $sql2 = "Insert into Booking(Pass_id,Flight_no,Clock,Class,Name,Contact) values (".$varx.",'".$var3."','".$time."','".$var5."','".$var1."','".$var4."')";
  if ($conn->query($sqlC) === TRUE) {
      echo "Contacts record created successfully<br>";
  } else {
      echo "Error: " . $sqlC . "<br>" . $conn->error;
  }

  if ($conn->query($sql2) === TRUE) {
      echo "Reservation record created successfully";
  } else {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
$conn->close();

?>
<h1>Your ticket has been booked successfully!!</h1>
  <br><br>
  <form action="Home Page.php" method="POST"> <button>Go Back</button></form>
</body>

</html>