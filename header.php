
<nav class="navbar navbar-expand-lg navbar-light main-nav" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
              <img src="assets/img/logo-white.png" alt="" class="img-fluid scrolled-logo-white">
              <img src="assets/img/logo-black.png" alt="" class="img-fluid scrolled-logo-black">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse main-nav-links" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] =="/arab-graphics-new/index.php") ?  "active" : "" ?>" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ($_SERVER['REQUEST_URI'] =="/arab-graphics-new/about-us.php") ?  "active" : "" ?>" href="about-us.php">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php echo ($_SERVER['REQUEST_URI'] =="/arab-graphics-new/advertising.php") || ($_SERVER['REQUEST_URI'] == "/arab-graphics-new/printing.php")  ? "active" : "" ?> href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu service-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="printing.php">Printing Services</a></li>
                  <li><a class="dropdown-item" href="advertising.php">Advertising Services</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link  <?php echo ($_SERVER['REQUEST_URI']=="/arab-graphics-new/contact.php") ? "active" : "" ?>" href="contact.php">Contact Us</a>
              </li>
            </ul>
        
              <a href="contact.php">
              <button class="btn btn-outline-success nav-btn " type="submit">Get in touch with us</button>
              </a>
         
          </div>
        </div>
    </nav>

    