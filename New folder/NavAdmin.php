<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">
  <title>Navbar</title>
  <style media="screen">
    .link:visited{
      background-color: #0f2551;
    }

    .nav-link:hover{
      background-color: #9f9db7;
    }

    

    .link:active{
      background-color: silver;
    }
    
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="Admin Page.php">Home<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="UpdateFare.php">Update Fare</a>
      <a class="nav-item nav-link" href="Airports.php">Airports</a>
      <a class="nav-item nav-link" href="Bookings.php">Bookings</a>
      <a class="nav-item nav-link" href="Home Page.php">Back</a>

    </div>
  </div>
</nav>
</body>
</html>