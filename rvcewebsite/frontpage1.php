<?php
session_start();

?>


<!DOCTYPE html>

<head>
    <title>RV College of Engineering</title>
    <link rel="stylesheet" type="text/css" href="frontpage.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container-fluid" id="container1">
        <img src="logo.jpg" alt="rvce logo" id="logo1">
        <img src="logo2.png" alt="rvce flag" id="logo2">
        <h4>Rashtreeya Sikshana Samithi Trust</h4>
        <h1>RV College of Engineering</h1>
        <p>Autonomous Institution affiliated to Visvesvaraya Technological University, Belagavi<br>
            Approved By AICTE, New Delhi, Accredited By NBA, New Delhi</p>

    </div>
    <!-- ---------------------------------------------------------------------------------------------------------------- -->

    <nav class="navbar navbar-expand-sm ">
        <div class="container-fluid" id="container2">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Infrastruture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admission</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Department</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Mca.html">MCA</a></li>
                            <li><a class="dropdown-item" href="#">CSE</a></li>
                            <li><a class="dropdown-item" href="#">ISE</a></li>
                            <li><a class="dropdown-item" href="#">ECE</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Placement</a>
                    </li>
                    <li class="nav-item dropdown">
                      
                        <a class="nav-link" href="#">Research</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Incubation Center</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Student Clubs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Achievements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!------------------------------------------------------------------------------------------------------------------ -->
<!-- Carousel -->
<div class="row">
<div class="col-sm-6">
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
  
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Image1.jpeg" alt="Los Angeles" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="Image2.jpeg" alt="Chicago" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="image3.png" alt="New York" class="d-block w-100">
      </div>
    </div>
  
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>   
<div class="col-sm-6">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
    
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
      
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image4.png" alt="Los Angeles" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="image5.png" alt="Chicago" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="Image6.jpeg" alt="New York" class="d-block w-100">
          </div>
        </div>
      
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
    </div>    
    <div class="container-fluid mt-3">
        <h3>click here to logout</h3>
        <a href="login.php">logout</a>
      </div>

      <h1>THIS IS USER HOME PAGE</h1><?php echo $_SESSION["username"] ?>
       


  
  
              
        


</body>

</html>