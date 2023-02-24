<?php
session_start();
if (isset($_SESSION['user_id'])){
  header("Location: ./watchlist.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/signup.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script></head>

  </head>
  <body>
    <div id="container">
    <form id="form" method="POST" action="includes/login.inc.php" >
        <div class="header">
          <h2>Log in</h2>
        </div>
        <p class="text">or use your email for registration:</p>
        <div class="form-group">
          <input
            type="text"
            class="input-design"
            id="email"
            placeholder="Email"
          />
          <small class="small">input incorrect</small>
        </div>
        <div class="form-group">
          <input
            type="password"
            class="input-design"
            id="password"
            placeholder="Password"
          />
          <small class="small">input incorrect</small>
        </div>
        <div class="button-group">
          <input type="submit" value="Login" class="button" id="submit"/>
        </div>
        <div class="redirect-group">
          <p>Don't have an account?</p>
          <a href="sign-up.php" id="redirect">Sign up</a>
        </div>
      </form>
    </div>

  </body>
  <script src="assets/js/login.js"></script>
</html>
