<?php
  include 'C:\xampp\htdocs\PR\database.php';
  session_start();

if ($_SESSION['username'] === NULL) {
    header('location: /pr/');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JS: JS Introduction</title>
  <link rel="shortcut icon" href="/pr/images/webcraft_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="navigation-stuff.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
<header class="container-fluid" style="position: fixed">
        <div class="row">
            <div class="col-4 col-md-8 col-lg-9">
                <h1 class="logo-text d-none d-md-block">Webcraft</h1>
                <img src="webcraft_logo.png" alt="" class="logo">
            </div>

            <div style="float: right" class="col-8 col-md-4 col-lg-3 d-flex justify-content-center">
            <div class="progression pr-3" style="margin: auto;">
                <h4 class="border bg-success rounded-pill px-3 pb-1 text-light"style="text-align: right; font-weight: normal;">Beginner</h1>
                <h4 style="text-align: right">Lesson: 0/3</h4>
            </div>

                <div class="dropdown ml-5" style="float: right;">
                    <button class="btn burger-menu dropdown-toggle" id="burgerMenu dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height:50px; width: 50px; margin: auto;";>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="/pr/options/options.php">Home</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><h6 class="dropdown-header">Beginner</h6></li>
                      <a class="dropdown-item active" href="js-page.php">JavaScript Introduction</a>
                      <a class="dropdown-item" href="js-page-2.php">JS Lesson 1: Variables</a>
                      <a class="dropdown-item" href="js-page-3.php">JS Lesson 2: Arithmetic Operators and Increments</a>
                      <a class="dropdown-item" href="js-page-4.php">JS Lesson 3: If-Else Statements and Logical Operators</a>
                      <a class="dropdown-item disabled" href="#">More coming soon!</a>
                    </div>
                </div>
            </div>
        </header>

      <div class="container-xxl" style="padding-top: 150px">
        <h1 class="text-center">
            JavaScript Introduction
        </h1>
        <h3 class="text-center my-3 px-5" style="font-weight: normal">
            JavaScript is a Programming language primarily used for Web Development. Its usage spreads through all websites for its interactivity and functionality for front-end development. 
            Compare to other programming languages, this is fairly simple even for beginners due to how easy you can understand and adopt this. JavaScript can be put in either head or body depending on what you want to use it for. 
        </h3>
      </div>
    <div class="container-xxl" style="margin-top: 100px">
        <h1 class="text-center">Two Types of JavaScript</h1>
        <div class="row my-5 pl-4"  style="border-left: 5px green solid">
            <div class="col-12 col-md-4">
                <h1>External</h1>
                <h4 style="font-weight: normal">
                External JavaScript are JavaScripts that are source and referenced outside of the website. <br>
                This is an example as to how an External Javascript is Referenced: <br>
                &lt;script src="javascript.js"&gt; &lt;/script&gt;
                </h4>
            </div>
            <div class="col-12 col-md-4">
                <img src="nagcocode.gif" class="img-fluid">
            </div>
        </div>        
        <div class="row justify-content-end pr-4"  style="margin-top: 90px; border-right: 5px green solid">
            <div class="col-12 col-md-4" style="float: right !important">
                <img src="cssgif.webp" class="img-fluid">
            </div>
            <div class="col-12 col-md-4" style="float: right !important">
                <h1 class="text-right">Internal</h1>
                <h4 class="text-right"style="font-weight: normal">
                Internal JavaScript are JavaScripts that are used and programmed inside the HTML Website.<br>
                This is an example as to how an Interla Javascript is Referenced: <br>
                &lt;script&gt; &lt;/script&gt;
                </h4>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center my-5">
        <a href="js-page-2.php">
            <button class="btn btn-primary px-5 py-3 mb-5">Next Page!</button>
        </a>
    </div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>