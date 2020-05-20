<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">
  <title>Sign In</title>
</head>
<body>
  <!-- Material form login -->
<div class="" style="width:35%;margin:auto;margin-top:5%;">

  <h2 class="card-header info-color white-text text-center py-4">
    <strong>Sign in</strong>
  </h2>

  <!--Card content-->
  <br>
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" method="POST" action="AdminSignInPage.php">

      <!-- Email -->
      <div class="md-form">
        <input type="text" id="materialLoginFormEmail" class="form-control" placeholder="Username" name = "name3">
        <label for="materialLoginFormEmail"></label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" id="materialLoginFormPassword" class="form-control" placeholder="Password" name="pass3">
        <label for="materialLoginFormPassword"></label>
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Forgot password -->
          <a href="">Forgot password?</a>
        </div>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="Submit">Sign in</button>

      <!-- Register -->
      <p>Not a member?
        <a href="AdminSignUpPage.php">Register</a>
      </p>

    </form>
    <!-- Form -->

  </div>
</div>


<!-- Material form login -->

<?php

  function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg'); window.history.back();</script>";
  }
        if(isset($_POST['Submit'])){
        $conn = mysqli_connect('localhost', 'root', '','Airways');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $user= mysqli_real_escape_string($conn,$_POST['name3']);
        $pass= mysqli_real_escape_string($conn,$_POST['pass3']);;

        echo "hello";
        $sql="Select password from Admin where username='".$user."'";
         
        if ($result=mysqli_query($conn,$sql))
        {
        // Fetch one and one row
        while ($row=mysqli_fetch_row($result))
        {
          if($pass!==$row[0]) alert("wrong password");
          elseif($pass===$row[0]) {
            echo "hello";
            header('Location:Admin Page.php');
            die();
            }
        }
        alert("user not registered");
        ///echo "<script>"mysqli_free_result($result);
        }
}

?>

</body>
</html>