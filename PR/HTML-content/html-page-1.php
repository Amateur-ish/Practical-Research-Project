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
  <title>HTML: HTML Introduction</title>
  <link rel="shortcut icon" href="/pr/images/webcraft_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="content-style.css">
  <link rel="stylesheet" href="navigation-stuff.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <h4 style="text-align: right">Lesson: 0/1</h4>
            </div>
                <div class="dropdown ml-5" style="float: right;">
                    <button class="btn burger-menu dropdown-toggle" id="burgerMenu dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height:50px; width: 50px; margin: auto;";>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/pr/options/options.php" id="home"><i class="fa fa-home"></i> Home</a>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header">Beginner</h6></li>
                        <a class="dropdown-item active" href="html-page-1.php">HTML Web Development Introduction</a>
                        <a class="dropdown-item" href="html-page-2.php">HTML Lesson 1: Basic HTML Tags</a>
                        <a class="dropdown-item disabled" href="#">More coming soon!</a>
                    </div>
                </div>
            </div>
          </header>
      <div class="container-lg intro-page">
        <div class="section-thing">
            <h1>
                Introduction to Web development
            </h1>
            <p class="mt-3">Web development is the process of developing websites and web apps that you can use on the internet. It involves creating what you see on the screen and 
                making sure everything works when you click or tap things. Computer languages like HTML, CSS, and JavaScript are used to make websites functional and presentable.
            </p>

        <img src="nagdedebug.gif" class="img-fluid">
        </div>
      </div>

      <div class="container-xl my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h5 class="my-3">Web development is typically divided into three main areas:</h5>
                <img src="different-developers.jpg" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <h5 class="my-3">Here is the basic structure of a website:</h5>
                <img src="basic-struct.jpg" class="img-fluid">
            </div>
        </div>
      </div>

      <div class="container-lg">
        <div class="row">
            <h1 class="what-html">What is HTML?</h1>
            <div class="col-12 col-md-6">
                <p class="html-desc">HTML stands for <span style="color:rgb(255, 0, 106); font-weight: bold;">HyperText Markup Language.</span> It provides the structure to the content appearing on a website, including images, text, or videos. HTML consists of a series of elements which tells the browser how to display the content. </p> 
                
            </div>
            <div class="col-12 col-md-6">  
                <p class="html-bisek">Below, you will see the basic structure of an HTML Document. <br> Try changing the text "Test it out yourself" and press execute to see the changes.</p>
                
            </div>
        </div>
      </div>
      <div class="container-xxl">
        <div class="row">
            <div class="col-12 col-md-6">
            <h1>Input:</h1>
                <textarea id="html-input" style="min-width: 100%; height:250px"></textarea>
            </div>
            <div class="col-12 col-md-6" id="output">
            <h1>Output:</h1>
                <iframe allowfullscreen="true" id="htmlOutput" style="min-width: 100%; height:250px"></iframe>
            </div>
        </div>
        <button type="button" class="btn btn-success text-light my-3" id="execute">Execute</button>
       </div>

      <div class="container-fluid text-center" style="margin: 130px 0px">
        <a href="html-page-2.php">
          <button class="btn btn-primary px-5 py-3 mb-5">Next Page!</button>
        </a>
        </div>
        <script src="executor.js">

        </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>


</body>
</html>