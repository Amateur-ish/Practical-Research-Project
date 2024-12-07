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
  <link rel="stylesheet" href="content-style.css">
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
                    <a class="dropdown-item" href="js-page.php">JavaScript Introduction</a>
                    <a class="dropdown-item" href="js-page-2.php">JS Lesson 1: Variables</a>
                    <a class="dropdown-item" href="js-page-3.php">JS Lesson 2: Arithmetic Operators and Increments</a>
                    <a class="dropdown-item active" href="js-page-4.php">JS Lesson 3: If-Else Statements and Logical Operators</a>
                    <a class="dropdown-item disabled" href="#">More coming soon!</a>
                </div>
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
                <p class="html-bisek">Below, you will see the basic structure of an HTML Document. <br> Try changing the text "Test it out yourself" and press execute to see the changes.</h1>
            </div>
        </div>
      </div>
      <div class="container-xxl">
        <div class="row">
            <div class="col-12 col-md-6">
                <textarea id="html-input" rows="10" cols="50"></textarea>
            </div>
            <div class="col-12 col-md-6" id="output">
                <iframe allowfullscreen="true" id="htmlOutput"></iframe>
            </div>
        </div>
        <button type="button" class="btn btn-primary my-3" id="execute">Execute</button>
       </div>

      <div class="container-fluid text-center" style="margin: 130px 0px">
        <a href="html-page-2.php">
          <button class="btn btn-primary px-5 py-3 mb-5">Next Page!</button>
        </a>
        </div>

        <script src="executor.js">

        </script>


</body>
</html>