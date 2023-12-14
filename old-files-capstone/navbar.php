<link rel="stylesheet" href="css/navbar.css">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark navbar-text">
  <div class="container-fluid navbar-text">
    <a class="navbar-brand" href="index.php">
      <img src="images/syncotech_logo_white.png" alt="Bootstrap" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link navbar-text" aria-current="page" href="index" style="color: white;">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text" href="aboutpage" style="color: white;">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text" href="gallerypage" style="color: white;">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text" href="communitypage" style="color: white;">COMMUNITY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navbar-text" href="downloadpage" style="color: white;">DOWNLOAD</a>
        </li>
      </ul>
      <span class="navbar-text" style="color: white; margin-right:20px">
        <?php 
        if(isset($_SESSION['username'])){
          echo $_SESSION['username']; 
        }
        ?>
      </span>
      <span class="navbar-text">
        <?php
        if (isset($_SESSION['username'])) {
            // User is logged in, display logout button
            echo '<a href="logout" type="button" class="btn log-button shadow-none">Logout</a>';
        } else {
            // User is not logged in, display login button
            echo '<a href="loginpage" type="button" name="login" class="btn log-button shadow-none">Login</a>';
        }
        ?>
      </span>
    </div>
  </div>
</nav>


