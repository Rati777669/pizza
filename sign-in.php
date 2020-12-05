<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ($email == '' || $password == '') {
    echo " <div class='alert alert-danger'>Enter username or password</div>";
  } else {
    session_start();
    include 'conn.php';
    $result = mysqli_query($con, "select * from users where email = '$email' and password='$password'");

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
      @session_start();
      $_SESSION['email'] = $email;
      echo "<script>location.href='index.php'</script>";
    } else {
      echo " <div class='alert alert-danger'>Your Email or Password is incorrect</div>";
      echo "";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Welcome to Campus Cauldron!</title>
  <!-- SPACE FOR FONTS -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@800&family=Raleway:ital,wght@1,300&family=Roboto+Slab:wght@600&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
  <!-- FONT AWESOME LINKS -->
  <script src="https://kit.fontawesome.com/959552e028.js" crossorigin="anonymous"></script>

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/styles.css">
</head>


<!-- FOR EVENTS AND FESTS -->
<style>
  .card .form-container button {
    background-color: #31326f;
    color: white;
    border: none;
    border-radius: 4px;
  }

  .card .form-container button:hover {
    background-color: #414292;
  }
</style>

<body style="background-image: url('images/img11.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;">
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark my-bg">
    <a class="navbar-brand" href="index.php">Campus Cauldron</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Links
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="index.php#after-intro">Notices</a>
            <a class="dropdown-item" href="index.php#after-notice">FAQs</a>
            <a class="dropdown-item" href="index.php#after-questions">Gallery</a>
            <a class="dropdown-item" href="index.php#after-gallery">Clubs and Cells</a>
            <a class="dropdown-item" href="index.php#after-clubs">Events and Fests</a>
            <a class="dropdown-item" href="index.php#after-fests">College Map</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ask.php">Ask</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
  <br><br>
  <center>
    <section class="sign-in" style="width: 30rem;">
      <div class="card">
        <div class="card-body">
          <div class="form-container">
            <div class="row">

              <div class="col-lg-12 white-background">
                <h2 class="sign-up-head">Sign in to Campus Cauldron!</h2>
                <form name="loginf" action="#" onsubmit="return validation()" method="POST">
                  <div style="text-align:left" class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email ID">
                  </div>
                  <div style="text-align:left" class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>

                  <div style="text-align:left">
                    <input type="checkbox" id="terms" name="terms">
                    <label for="checkbox">Keep Me Signed In</label>
                  </div>
                  <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Sign In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section>
  </center>
  <!-- FOOTER EXPERIMENT -->
  <br><br>
  <!-- Footer -->
  <section id="footer">
    <footer class="page-footer font-small mdb-color pt-4">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Campus Cauldron</h6>
            <p>We hope you enjoyed your visit to our homepage!</p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Links</h6>
            <p>
              <a class="footer-link" href="index.php#after-intro">Notice</a>
            </p>
            <p>
              <a class="footer-link" href="index.php#after-questions">Gallery</a>
            </p>
            <p>
              <a class="footer-link" href="index.php#after-gallery">Clubs and Cells</a>
            </p>
            <p>
              <a class="footer-link" href="index.php#after-clubs">Events and Fests</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact us</h6>
            <p>
              <a class="footer-link" href="#!"><i class="fab fa-facebook-square mr-3"></i>Facebook</a>
            </p>
            <p>
              <a class="footer-link" href="#!"><i class="fab fa-linkedin mr-3"></i>LinkedIn</a>
            </p>
            <p>
              <a class="footer-link" href="#!"><i class="fab fa-twitter-square mr-3"></i>Twitter</a>
            </p>
            <p>
              <a class="footer-link" href="#!"><i class="fas fa-envelope mr-3"></i>E-mail</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none">

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Legal</h6>
            <p>
              <a class="footer-link" href="#!">Privacy Policy</a>
            </p>
            <p>
              <a class="footer-link" href="#!">Cookie Policy</a>
            </p>
            <p>
              <a class="footer-link" href="#!">Terms Of Us</a>
            </p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <hr>


        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

    </footer>
    <!-- Footer -->
  </section>
  // validation for empty field
  <script>
    function validation() {
      var em = document.loginf.email.value;
      var ps = document.loginf.password.value;
      if (em.length == "" && ps.length == "") {
        alert("User Name and Password fields are empty");
        return false;
      } else {
        if (em.length == "") {
          alert("User Name is empty");
          return false;
        }
        if (ps.length == "") {
          alert("Password field is empty");
          return false;
        }
      }
    }
  </script>
  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
