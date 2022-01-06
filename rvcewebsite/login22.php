<?php
$connect=mysqli_connect("localhost","root","","login") or die ("connection failed");
if(!empty($_POST['submit']))
{
   $username=$_POST['email'];
   $pass=$_POST['pswd'];
   $error="";
   $success="";
  $query="select * from student where StudUsername='$username' and StudPassword='$pass'";
  $result=mysqli_query($connect, $query);
  $count=mysqli_num_rows($result);
  if($count>0){

    
    header("Location:  frontpage.php");
    exit;
  }
  else{
  
    header("location:login2.php");
    echo '<h3>Invalid username or password</h3>';
  }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="login2.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid" id="container1">
        <img src="logo.jpg" alt="rvce logo" id="logo1">
        <img src="logo2.png" alt="rvce flag" id="logo2">
        <h4>Rashtreeya Sikshana Samithi Trust</h4>
        <h1>R V College of Engineering</h1>
        <p>Autonomous Institution affiliated to Visvesvaraya Technological University, Belagavi<br>
            Approved By AICTE, New Delhi, Accredited By NBA, New Delhi</p>

    </div>

 
    <section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-140">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>
<form method="POST">
            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" name="pswd" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="form1Example3"
              />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit" value="login" name="submit">Login</button>

            

          </div>
</form>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- <form method="POST" action="login.php">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary" value="login" name="login">Submit</button>
    </form> -->
</body>

</html>