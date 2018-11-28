<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIM Beasiswa - AdminLogin</title>
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
              <a class="nav-link" href="about.html">Home</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Beasiswa
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.html">Alumni ITS</a>
                <a class="dropdown-item" href="portfolio-2-col.html">Institusi</a>
                <a class="dropdown-item" href="portfolio-3-col.html">Non Institusi</a>
                <a class="dropdown-item" href="portfolio-4-col.html">Pasca Sarjana</a>
                <a class="dropdown-item" href="portfolio-item.html">Luar Negeri</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog-home.html">Blog</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
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
  


  <div class="text-center row justify-content-center">    	
    <form method="POST" action="login.php">
	    <br><h2>Login</h2><br>    	
	    <div class="form-group">
	      	<input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Username" required>
		</div>
		<div class="form-group">
	    	<input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
		</div>
		<div class="form-group">
	    	<input type="submit" class="btn btn-info btn-lg btn-block" name="login">
		</div>
		<input type="checkbox" id="remember_me" name="_remember_me">
		<label for="remember_me">Remember me</label>
	</form>
			
        
   </div>
</div>



    <footer class="py-3">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; SIM Beasiswa 2018</p>
      </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>