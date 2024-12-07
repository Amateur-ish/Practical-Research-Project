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
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="navigation-stuff.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <header class="container-fluid" style="position: fixed">
        <div class="row">
            <div class="col-6">
                <h1 class="logo-text">Webcraft</h1>
                <img src="webcraft_logo.png" alt="" class="logo">
            </div>
            <div class="col-6">
                <div class="dropdown">
                    <button class="btn burger-menu dropdown-toggle" id="burgerMenu dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height:50px; width: 50px";>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/pr/options/options.php">Home</a>
                        <a class="dropdown-item active" href="js-page.php">JavaScript Introduction</a>
                        <a class="dropdown-item" href="js-page-2.php">JS Lesson 1: Variables</a>
                        <a class="dropdown-item" href="js-page-3.php">JS Lesson 2: Arithmetic Operators and Increments</a>
                        <a class="dropdown-item" href="js-page-4.php">JS Lesson 3: If-Else Statements and Logical Operators</a>
                        <a class="dropdown-item disabled" href="#">More coming soon!</a>
                    </div>
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
                <h3 style="font-weight: normal">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam distinctio nesciunt sequi earum praesentium quis facilis est adipisci eius quidem? Consequuntur vel veniam dignissimos, labore officiis sed non consectetur quaerat!
                </h3>
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
                <h1 class="text-right">External</h1>
                <h3 class="text-right"style="font-weight: normal">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam distinctio nesciunt sequi earum praesentium quis facilis est adipisci eius quidem? Consequuntur vel veniam dignissimos, labore officiis sed non consectetur quaerat!
                </h3>
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