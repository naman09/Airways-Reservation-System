<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">
  <title>Sign Up</title>
  <style type="text/css">.error{color:#FF0000;}</style>
</head>
<body>
<!-- Default form register -->
<form class="text-center border border-light p-5" method="POST" action="AdminSignUpPage.php">

    <p class="h1 mb-4">Sign up</p>

    <p><span class="error" style="position: fixed;left:45px;">*required field</span></p>
    <br><br>
    <div class="form-row mb-4">
        <span class="error">*</span>
        <div class="col">
            <!-- First name -->
            <input type="text"name="name1" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" >

        </div>
        <span class="error">*</span>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="name2">
        </div>
    </div>

    <!-- E-mail -->
    <div class="form-row mb-4">
        &nbsp;
        <div class="col">
        <input type="email" id="defaultRegisterFormEmail" class="form-control" placeholder="E-mail" name="email">
        </div>
    </div>
    <!-- Password -->
    <div class="form-row mb-4">
        <span class="error">*</span>
        <div class="col">
            <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="pass1">
        </div>
        <div class="col"></div>
    </div>
    <!-- Phone number -->


    <div class="form-row mb-4">
    <span class="error">*</span>
    <div class="col">
        <input type="password" id="defaultRegisterPhonePassword" class="form-control" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="pass2">
    </div>
    <div class="col"></div>
    </div>
    <br>
    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-lg" type="submit" name="Submit">Sign Up</button>

</form>
<!-- Default form register -->
<?php

    function alert($msg) {
        $flag=FALSE;
        echo "<script type='text/javascript'>alert('$msg'); window.history.back();</script>";
    }

    if(isset($_POST['Submit'])){

        $conn = mysqli_connect('localhost', 'root', '','Airways');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }  


        $name1=$_POST['name1'];
        $name2=$_POST['name2'];
        $email=$_POST['email'];
        $pass1=$_POST['pass1'];
        $pass2=$_POST['pass2'];


        $p1 = $p2 = $p3 = $p4 = $p5 = False;
        if(empty($name1)){alert("first name is required");}
        elseif (!preg_match("/^[a-zA-Z][a-zA-Z\\s]+$/",$name1)) {
            alert("only letters allowed");
        }
        else{
            $p1 = True;
        }

        if (!preg_match("/^[a-zA-Z][a-zA-Z\\s]+$/",$name2)) {
            alert("only letters allowed");
        }
        else {
            $p2 = True;
        }
        if(empty($pass1)) alert("password is required");
        else $p3 = True;
        if(empty($pass2)) alert("this field is required");
        else $p4 = True;
        if($pass1!=$pass2) alert("password does not match");
        elseif(strlen($pass1)<8) alert("password is too small");
        else $p5 = True;

        if($p1 and $p2 and $p3 and $p4 and $p5)
        {
            $fullname = $name1." ".$name2;
            
            //check if exists
            $sql2="Select password from Admin where username ='".$fullname."'";

            if ($result=mysqli_query($conn,$sql2))
            {
            // Fetch one and one row
                while ($row=mysqli_fetch_row($result))
                {
                    alert("username already exists");
                    die();
                }
             }

            $sql = "Insert into Admin(username,password) values('".$fullname."','".$pass1."')";

            if ($conn->query($sql) === TRUE) {
                echo "Admin registered successfully<br>";
                header('Location:Admin Page.php');
                die();
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }


        }
        //Save in database
        
        die();
        $conn->close();

}

?>
</body>
</html>