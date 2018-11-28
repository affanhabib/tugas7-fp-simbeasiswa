<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIM Beasiswa - HomePage</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">SIM Beasiswa</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Beasiswa
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="#">Alumni ITS</a>
                <a class="dropdown-item" href="#">Institusi</a>
                <a class="dropdown-item" href="#">Non Institusi</a>
                <a class="dropdown-item" href="#">Pasca Sarjana</a>
                <a class="dropdown-item" href="#">Luar Negeri</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                 <?php
                  if (!empty($_SESSION["valid"]))
                
                  {
                      

                      ECHO '<a class="dropdown-item" href="logout.php">Logout Admin</a>';
                      
                  }
                  
                  else
                  
                  {
                      ECHO '<a class="dropdown-item" href="login.php">Login Admin</a>';
                  }
                  ?>
                <a class="dropdown-item" href="#.html">Sistem Informasi</a>
                <a class="dropdown-item" href="UPLOAD.html">Upload</a>
              </div>
            </li>
             </li>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Cari</button>
            </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('images/example/ex1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>BIDIKMISI 2018</h3>
              <p>Informasi singkat mengenai bidikmisi</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('images/example/ex2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>BEASISWA ALUMNI Ke-XX</h3>
              <p>Informasi singkat mengenai beasiswa alumni</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('images/example/ex3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Beasiswa Tokopedia</h3>
              <p>Informasi singkat mengenai beasiswa tokopedia</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <div class="container">

      <h1 class="my-4">Welcome to Sistem Informasi Beasiswa ITS</h1>

      <div class="row">
        <div class="col-sm-8">
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
          <p>
            <a class="btn btn-primary btn-lg" href="#">About Us &raquo;</a>
          </p>
        </div>
          <div class="card mb-4" style="margin: 20px">
            <h5 class="card-header">Cari</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Beasiswa">
                <span class="input-group-btn">
                  <button class="btn btn-success" type="button">Go!</button>
                </span>
                <br>
              </div>
              <div class="col-lg-36" style="margin: 20px">
                <h6> <br> Kategori</h6>
                  <ul class="list-group">
                <li class="list-group-item"><a href="#">Oktober-Desember</a> <span class="badge">12</span></li>
                <li class="list-group-item"><a href="#">Januari-Maret</a> <span class="badge">5</span></li> 
                <li class="list-group-item"><a href="#">Januari-Maret</a> <span class="badge">3</span></li> 
                <li class="list-group-item"><a href="#">Juli-September</a> <span class="badge">3</span></li>
              </ul>

                </div>
            </div>
          </div>

      </div>
      <hr>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/example/ex1.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Beasiswa Alumni ITS</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
              <h6>Deadline :</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/example/ex2.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Beasiswa Traveloka</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
              <h6>Deadline :</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="images/example/ex3.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Beasiswa Pertamina</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
              <h6>Deadline :</h6>
            </div>
          </div>
        </div>
        <ul class="pagination" style="margin:20px 440px" >
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
        <hr>

    </div>
    <hr>
    <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <button type="submit" class="btn btn-success" id="sendMessageButton">Send Message</button>
          </form>
        </div>
        <div class="card mb-4">
            <h5 class="card-header">Kategori</h5>
            <div class="card-body">
              <div class="col mb-4" style="margin-right:  100px">
                  <ul class="list-group" style="text-align: center;">
                <li class="list-group-item"><a href="#">Alumni ITS</a></li>
                <li class="list-group-item"><a href="#">Institusi</a> </li> 
                <li class="list-group-item"><a href="#">Non Institusi</a> </li> 
                <li class="list-group-item"><a href="#">Pasca Sarjana</a> </li>
                <li class="list-group-item"><a href="#">Luar Negeri</a> </span></li>
              </ul>
                </ul>
              </div>
            </div>
          </div>

      </div>
      <hr>
    <footer class="py-3">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; SIM Beasiswa 2018</p>
      </div>
    </footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
