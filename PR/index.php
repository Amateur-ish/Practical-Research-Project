<?php
include 'database.php';
session_start();
if(array_key_exists('username', $_SESSION)) {
  header('location: /pr/options/options.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Webcraft</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/webcraft_logo.png" type="image/x-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
  <header>
    <h1 class="logo-text">Webcraft</h1>
    <img src="WEB.png" alt="" class="logo" style="border-radius: 80px;">
    
  </header>

  <h2 class="slogan">Craft your Dream Web!</h2>
  <h3>Webcraft is a learning tool that teaches you basic Web Development including HTML,CSS and Javascript. </h3>

  <h1 style=" margin-left: 7vh; margin-top: 5vh;">System<span style="color: #e06c75;">.<span style="color: #e06c75;">out</span>.<span style="color: #61afef;">println</span></span>("</h1>
  <div class="string">
      <h1 class="greeting hi1">Hello, World!</h1>
      <h1 class="greeting hi2">안녕하세요, 월드!</h1>
      <h1 class="greeting hi3">こんにちは世界！</h1>
      <h1 class="greeting hi4">¡Hola Mundo!</h1>
  </div>
  <h1 class="closure">");</h1>

  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
      <div class="input-group">
         <i class="fas fa-user"></i>
         <input type="text" name="username" id="fName" placeholder="Username" required>
         <label for="fname">Username</label>
      </div>
      <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="email" placeholder="Email" required>
          <label for="email">Email</label>
      </div>
      <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
      </div>
     <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Already Have Account ?</p>
      <button id="signInButton">Sign In</button>
    </div>
  </div>

  <div class="container" id="signIn">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="login.php">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="text" name="username1" id="email" placeholder="Username" required>
            <label for="email">username</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password1" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <p class="recover">
          <a href="#">Recover Password</a>
        </p>
       <input type="submit" class="btn" value="Sign In" name="signIn">
      </form>
      <p class="or">
        ────────── or ──────────
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Don't have account yet?</p>
        <button id="signUpButton">Sign Up</button>
      </div>
    </div>
    <script src="script.js"></script>

 <div id="About-Us">
  <h4 class="about-title">About</h4>
  <h5 class="about-desc">
    Webcraft is developed to teach students basic programming which focuses <br>
    on the fundamentals of Web Development. It aims to provide and share knowledge <br>
    to students who are interested in learning programming. Webcraft is a <br>
    beginner-friendly and people with no background knowledge on programming could <br>
    try this web application.
  </h5>
 </div>
</body>
</html>