<?php
session_start();
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/959552e028.js" crossorigin="anonymous"></script>
  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>

<!-- FOR EVENTS AND FESTS -->
<style>
  #test {
    margin-top: 3rem;
    height: 463px;
    overflow: auto;
    text-align: justify;
    border: 3px solid black;
    padding: 10px;
  }

  @media (min-width: 768px) {

    .carousel-inner .active,
    .carousel-inner .active+.carousel-item,
    .carousel-inner .active+.carousel-item+.carousel-item {
      display: block;
    }

    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
      transition: none;
      margin-right: initial;
    }

    .carousel-inner .carousel-item-next,
    .carousel-inner .carousel-item-prev {
      position: relative;
      transform: translate3d(0, 0, 0);
    }

    .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
      position: absolute;
      top: 0;
      right: -33.3333%;
      z-index: -1;
      display: block;
      visibility: visible;
    }

    .active.carousel-item-left+.carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left+.carousel-item,
    .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
    .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
      position: relative;
      transform: translate3d(-100%, 0, 0);
      visibility: visible;
    }

    .carousel-inner .carousel-item-prev.carousel-item-right {
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
      display: block;
      visibility: visible;
    }

    .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right+.carousel-item,
    .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
    .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
      position: relative;
      transform: translate3d(100%, 0, 0);
      visibility: visible;
      display: block;
      visibility: visible;
    }

    .my-img:hover {
      -ms-transform: scale(1.2);
      /* IE 9 */
      -webkit-transform: scale(1.2);
      /* Safari 3-8 */
      transform: scale(1.2);
    }

  }
</style>

<body>
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

      <?php
      if (!isset($_SESSION['email'])) {

      ?>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="admin_login.php"><i class="fas fa-lock"></i>Admin Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sign-in.php">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sign-up.php">Sign Up</a>
          </li>
        </ul>
      <?php } else {
        include 'conn.php';
        $sql1 = "select * from users WHERE email='" . $_SESSION['email'] . "'";
        $rs_result1 = mysqli_query($con, $sql1);
        $roww = mysqli_fetch_assoc($rs_result1);
      ?><ul>
          <li class="nav-item dropdown dropleft">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-circle"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="userprofile.php?id=<?php echo $roww["id"]; ?>">View Profile</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
        <?php } ?>
        </ul>
    </div>
  </nav>

  <!-- INTRODUCTION -->
  <section id="introduction" class="introduction">
    <div class="intro-container">
      <div class="row">
        <div class="col-lg-6">
          <h1 id="intro-head">Its always nice to have someone to answer your questions.</h1>
          <h4 id="intro-text">Campus Cauldron gives you just that!</h4>
        </div>
        <div class="col-lg-6">
          <img id="intro-img" src="images/intro.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <hr id="after-intro" class="section-diff" style="width:70%">

  <!-- NOTICES AND LINKS -->
  <section id="Notices-and-Links">
    <div class="">
      <div class="row">
        <div class="col-lg-3">
          <div class="notice-panel">
            <h3 class="notice-head"><i class="icon far fa-calendar-alt"></i>Notices</h3>
            <marquee height="310" direction="up" scrollamount="3">
              <p><a class="notice-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>Date: 19/03/2020
                  <hr>
                </a></p>
              <p><a class="notice-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>Date: 19/03/2020
                  <hr>
                </a></p>
              <p><a class="notice-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>Date: 19/03/2020
                  <hr>
                </a></p>
              <p><a class="notice-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>Date: 19/03/2020
                  <hr>
                </a></p>
              <p><a class="notice-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>Date: 19/03/2020
                  <hr>
                </a></p>
              <p><a class="notice-link" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>Date: 19/03/2020
                  <hr>
                </a></p>
            </marquee>
          </div>
        </div>

        <div class="col-lg-6">
          <div id="test">
            <h4 id="list-item-1">Item 1</h4>
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
            <h4 id="list-item-2">Item 2</h4>
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
            <h4 id="list-item-3">Item 3</h4>
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
            <h4 id="list-item-4">Item 4</h4>
            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
          </div>
        </div>

        <div class="col-lg-3">
          <a class="my-links" href="#after-questions">
            <h3 class="links-head"><i class="icon far fa-image"></i>Gallery</h3>
          </a>
          <a class="my-links" href="#after-gallery">
            <h3 class="links-head"><i class="icon fas fa-drafting-compass"></i>Clubs and Cells</h3>
          </a>
          <a class="my-links" href="#after-clubs">
            <h3 class="links-head"><i class="icon far fa-calendar-times"></i>Events and Fests</h3>
          </a>
          <a class="my-links" href="#after-fests">
            <h3 class="links-head"><i class="icon fas fa-map-marked-alt"></i>College Map</h3>
          </a>

        </div>

      </div>
    </div>
  </section>

  <hr id="after-notice" class="section-diff" style="width:70%">

  <!-- QUESTIONS -->
  <section id="Questions">
    <div class="my-container">
      <div class="row">
        <div class="col-lg-3">
          <div class="my-panel">
            <strong>
              <h2 class="question">What is a good place to visit in Jhansi?</h2>
            </strong>
            <h4 class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="my-panel">
            <strong>
              <h2 class="question">What is a good place to visit in Jhansi?</h2>
            </strong>
            <h4 class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="my-panel">
            <strong>
              <h2 class="question">What is a good place to visit in Jhansi?</h2>
            </strong>
            <h4 class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="my-panel">
            <strong>
              <h2 class="question">What is a good place to visit in Jhansi?</h2>
            </strong>
            <h4 class="answer">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
          </div>
        </div>
      </div>
    </div>
  </section>

  <hr id="after-questions" class="section-diff" style="width:70%">

  <!-- GALLERY -->
  <section id="gallery">
    <h1 class="gallery-head">Caught Within The Frames</h1>

    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <img class="gallery-images" src="images/img1.jpg" alt="">
          <br>
          <img class="gallery-images" src="images/img2.jpg" alt="">
          <br>
          <img class="gallery-images" src="images/img3.jpeg" alt="">
        </div>
        <div class="col-lg-4">
          <img class="gallery-images" src="images/img4.jpeg" alt="">
          <br>
          <img class="gallery-images" src="images/img5.jpg" alt="">
          <br>
          <img class="gallery-images" src="images/img10.jpg" alt="">
          <br>
          <img class="gallery-images" src="images/img6.jpeg" alt="">
        </div>
        <div class="col-lg-4">
          <img class="gallery-images" src="images/img7.jpeg" alt="">
          <br>
          <img class="gallery-images" src="images/img8.jpeg" alt="">
          <br>
          <img class="gallery-images" src="images/img11.jpg" alt="">
          <br>
        </div>
      </div>
      <div id="gallery-btn">
        <a id="gallery-link" href="#">
          <h5 class="intro-link-head">View All</h5>
        </a>
      </div>
    </div>
  </section>

  <hr id="after-gallery" class="section-diff" style="width:70%">

  <!-- CLUBS AND COUNCILS -->
  <section id="clubs-and-councils">
    <h1 class="clubs-head">Clubs and Councils</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <a class="div-link" href="#">
            <div class="my-card">
              <img href="#" src="images/CODE.png" alt="Avatar" style="width:100%">
              <div class="container">
                <h4><b>CODE</b></h4>
                <p>Club Of DEvelpoers</p>
              </div>
            </div>
          </a>
          <br>
          <a class="div-link" href="#">
            <div class="my-card">
              <img src="images/FAH.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <h4><b>FAH</b></h4>
                <p>Fine Arts and Hobbies</p>
              </div>
            </div>
          </a>
          <br>
          <a class="div-link" href="#">
            <div id="CSC-img" class="my-card">
              <img src="images/CSC.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <h4><b>CSC</b></h4>
                <p>Cultural Sub Council</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a class="div-link" href="#">
            <div class="my-card">
              <img src="images/IAI.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <h4><b>Innovation And Incubation Cell</b></h4>
                <p></p>
              </div>
            </div>
          </a>
          <br>
          <a class="div-link" href="#">
            <div class="my-card">
              <img src="images/SSC.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <h4><b>Sports Sub Council</b></h4>
                <p></p>
              </div>
            </div>
          </a>
          <br>

        </div>
        <div class="col-lg-4">
          <a class="div-link" href="#">
            <div class="my-card">
              <img id="TPC-img" src="images/TPC.png" alt="Avatar">
              <div class="container">
                <h4><b>TPC</b></h4>
                <p>Training And Placement Cell</p>
              </div>
            </div>
          </a>
          <br>
          <a class="div-link" href="#">
            <div class="my-card">
              <img id="TDL-img" src="images/TDL.jpg" alt="Avatar">
              <div class="container">
                <h4><b>TDL</b></h4>
                <p>The Drone Learners Club</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <hr id="after-clubs" class="section-diff" style="width:70%">

  <!-- EVENTS AND FESTS -->
  <section id="events-and-fests">
    <h1 class="events-head">Events And Fests</h1>
    <div class="container-fluid">
      <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-10 mxauto" role="listbox">
          <div class="carousel-item col-md-4 active">
            <img class="my-img img-fluid mx-auto d-bloc" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="slide 1">
            <div class="carousel-caption d-none d-md-block">
              <h5>Magnum Opus</h5>
              <p>A Magnificent Event For Magnificent Personas!</p>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <img class="my-img img-fluid mx-auto d-block" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="slide 2">
            <div class="carousel-caption d-none d-md-block">
              <h5>Sopan</h5>
              <p>A Literary Fest For All Enthusiasts!</p>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <img class="my-img img-fluid mx-auto d-block" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="slide 3">
            <div class="carousel-caption d-none d-md-block">
              <h5>Prabhanjan</h5>
              <p>A Festival For Sports And Games!</p>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <img class="my-img img-fluid mx-auto d-block" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="slide 4">
            <div class="carousel-caption d-none d-md-block">
              <h5>Utsav</h5>
              <p>A Festival Calls!</p>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <img class="my-img img-fluid mx-auto d-block" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="slide 5">
            <div class="carousel-caption d-none d-md-block">
              <h5>Abhinandan</h5>
              <p>A Jubiliant Event To Welcome The Students To The Rich Culture Of BIET!</p>
            </div>
          </div>
          <div class="carousel-item col-md-4">
            <img class="my-img img-fluid mx-auto d-block" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="slide 6">
            <div class="carousel-caption d-none d-md-block">
              <h5>PACE</h5>
              <p>A Sports Event Where Each Branch Shows Their Pace!</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
          <i class="fa fa-chevron-left fa-lg text-muted"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
          <i class="fa fa-chevron-right fa-lg text-muted"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <hr id="after-fests" class="section-diff" style="width:70%">

  <!-- COLLEGE MAP -->
  <section id="map">
    <div class="container">
      <h1 class="map-head">Feeling Lost in the magnificence of the campus?</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.3755268252967!2d78.63823101550054!3d25.459133183775105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39777701fa29d96b%3A0x274c37abc80c1ad1!2sBundelkhand%20Institute%20Of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1606041154250!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </section>

  <hr id="after-map" class="section-diff" style="width:70%">

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


  <!-- FOR EVENTS AND FESTS -->
  <script type="text/javascript">
    $('#carouselExample').on('slide.bs.carousel', function(e) {

      var $e = $(e.relatedTarget);

      var idx = $e.index();
      console.log("IDX :  " + idx);

      var itemsPerSlide = 6;
      var totalItems = $('.carousel-item').length;

      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end
          if (e.direction == "left") {
            $('.carousel-item').eq(i).appendTo('.carousel-inner');
          } else {
            $('.carousel-item').eq(0).appendTo('.carousel-inner');
          }
        }
      }
    });
  </script>


  <!-- SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>