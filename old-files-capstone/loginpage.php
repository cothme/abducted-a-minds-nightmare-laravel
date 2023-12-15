<?php
session_start();
if(isset($_SESSION['username']))
{
    header('Location: index');
    exit();
}
?>
<link rel="stylesheet" href="css/loginpage2.css">
<?php include "header.php" ?>
<body>
  <div class="container">
    <img class="img-fluid" src="images/logo-with-effects.png">
  </div>
  <div class="container-fluid login-container p-1" style="width: 90%; margin-right: 50px;
    margin-left: 50px;">
    <div class="login-text signin-text">Sign In</div>
    <div class="form-label login-text" style="color:#C63D65; font-size:24px; margin-bottom:0px">
      <?php
        if(isset($_SESSION['status'])){
          echo $_SESSION['status'];
          unset($_SESSION['status']);
        }
      ?>
    </div>
    <form class="login-text login-form" method="post" action="login.php">
      <div class="mb-3" style="width: 100%;">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control shadow-none" name="email" id="emailinputhomepage" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3" style="width: 100%;">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control shadow-none" name="password" id="passwordinputhomepage">
      </div>
      <div class="mb-3" style="align-self: center;">
        <label for="" class="form-label">Dont have an account?</label>&nbsp;&nbsp;<a href="signuppage" style="text-decoration: none; color: #d95179">Create an account</a>
      </div>
      <button name="submit" class="btn login-btn shadow-none">Submit</button>
    </form>
    <div class="mb-3" style="align-self: center;">
      <img src="images/syncotech_logo_white.png" alt="Bootstrap" width="100" height="100">
    </div>
  </div>
</body>