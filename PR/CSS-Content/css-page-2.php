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
  <title>CSS: CSS Lesson 1</title>
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
                <h4 style="text-align: right">Lesson: 1/2</h4>
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
                        <a class="dropdown-item" href="css-page-1.php">CSS Introduction</a>
                        <a class="dropdown-item active" href="css-page-2.php">CSS Lesson 1: CSS Selectors</a>
                        <a class="dropdown-item" href="css-page-3.php">CSS Lesson 2: Text styles, Background-Color and Borders</a>
                        <a class="dropdown-item disabled" href="#">More coming soon!</a>
                    </div>
                </div>
            </div>
        </header>

<div class="container-xxl" style="padding-top: 150px; margin-bottom: 200px;">
    <h1 class="text-center">
        CSS Selectors: How to manipulate HTML Element Styles
    </h1>
    <h4 class="text-center mb-5"style="font-weight: normal;">
        CSS Selectors in CSS are the ones that select which elements affected by the CSS rules
    </h4>
    <div class="container-xxl my-5">
        <h1 style="font-weight: normal;">
            This is the basic syntax of CSS
        </h1>
        <textarea class="mb-5" style="height: 145px; min-width: 100%; font-size:25px">
            selector {
                property: value;
            }
        </textarea>
        <h3 class="mt-3"style="font-weight: normal;">
            <span style="font-weight:bold">Selector</span> - These are the HTML elements or elements that you want to style.
        </h3>
        <h3 class="mt-3" style="font-weight: normal;">
            <span style="font-weight:bold">Property</span> -This is the attribute that you want to change (ex: color, font-size, background).
        </h3>
        <h3 class="mt-3" style="font-weight: normal;">
            <span style="font-weight:bold">Value</span> - The value you want to apply to the property (ex: red, 16px).
        </h3>
</div>

<div class="container-xxl" style="margin-top: 150px">
    <h1 class="text-center">
        Types of CSS Selectors
    </h1>
    <div class="row my-4">
        <div class="col-12 p-5 bg-light my-3" style="border-radius: 20px; border-left: darkgreen 5px solid;">
            <h2>Element</h3>
            <h4 style="font-weight: normal; ">
                Selects all of the elements from the HTML. <br>
                example: <br> h1 { <br> font-size:10px <br> }
            </h4>
        </div>
        <div class="col-12 p-5 bg-light my-3" style="border-radius: 20px; border-left: darkgreen 5px solid;">
            <h2>Class Selector</h3>
            <h4 style="font-weight: normal; ">
                Selects all of the class selected from the HTML. Ends with a period<br>
                example: <br> .class { <br> font-size:10px <br> }
            </h4>
        </div>
        <div class="col-12 p-5 bg-light my-3" style="border-radius: 20px; border-left: darkgreen 5px solid;">
            <h2>ID Selector</h3>
            <h4 style="font-weight: normal; ">
                Selects the ID of an element from the HTML. Ends with a #<br>
                example: <br> #id { <br> font-size:10px <br> }
            </h4>
        </div>
    </div>
</div>
<div class="container-xxl">
    <div class="row">
        <div class="col-12"id="editorConsole">
            <h1>A Demonstration How a CSS Works:</h1>
            <h1>Input:</h1>
            <textarea id="html-input" style="min-width: 100%; height: 200px;"></textarea>
            <br>

        </div>
        <div class="col-12" id="the-output">
        <h1>Output:</h1>
            <iframe allowfullscreen="true" id="htmlOutput" style="min-width:100%; height: 250px; border: 2px black solid;">    
            </iframe>
        </div>
    </div>
    <button class="btn btn-success text-light" id="execute">Execute</button>
</div>

<div class="container-fluid text-center" style="margin: 130px 0px">
      <a href="css-page-3.php">
        <button class="btn btn-primary px-5 py-3 mb-5">Next Page!</button>
      </a>
</div>


<script src="executor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>