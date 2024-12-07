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
  <link rel="stylesheet" href="css-style-1.css">
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
                        <a class="dropdown-item active" href="css-page-1.php">CSS Introduction</a>
                        <a class="dropdown-item" href="css-page-2.php">CSS Lesson 1: CSS Selectors</a>
                        <a class="dropdown-item" href="css-page-3.php">CSS Lesson 2: Text styles, Background-Color and Borders</a>
                        <a class="dropdown-item disabled" href="#">More coming soon!</a>
                    </div>
                </div>
            </div>
          </header>
        </div>
      </header>
      <div class="container-xxl" style="padding-top: 200px">
        <h1>Designing the Web!</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 style="font-weight: normal">
                CSS is about enhancing the looks and feel or visual presentation of a webpage by adding various design techniques.
                You can see CSS as the design for the HTML as it is used on all popular websites.
                </h2>
            </div>
            <div class="col-12 col-md-6">
                <img class="img-fluid" src="paint.gif">
            </div>
        </div>
      </div>
      <div class="container-xxl" style="margin-top: 100px;">
        <div class="px-5">
            <h1>What is CSS?</h1>
            <h3 style="font-weight: normal;">
            CSS stands for <span class="text-danger">Cascading style sheets.</span> It means a stylesheet language that describes the presentation in terms of HTML or XML of a web page. CSS defines how elements should appear in terms of layout, colors, fonts, spacing, and other visual aspects.
            </h3>
        </div>
      </div>

      <div class="container-xxl" style="margin-top: 100px;">
        <div class="row px-5 justify-content-around">
            <h1>There are three types of implementing CSS:</h1>
            <div class="col-12 col-md-4" height="200px">
                <h2>Internal</h2>
                <p>
                    Internal CSS are CSS inside the website. It is coded and worked in the HTML website itself.
                </p>
                <textarea style="height: 100px; min-width: 100%; bottom:0;" id="html-input">
                &lt;style&gt; &lt;/style&gt;
                </textarea>
            </div>
            <div class="col-12 col-md-4" height="200px">
                <h2>External</h2>
                <p>
                    External CSS are CSS that are imported outside of the HTML Website.
                </p>
                <textarea style="height: 100px; min-width: 100%; bottom:0;" id="html-input">
                &lt;link rel="stylesheet" src="style.css"&gt;
                </textarea>
            </div>
            <div class="col-12 col-md-4" height="200px">
                <h2>Embedded</h2>
                <p>
                    Embedded CSS are CSS that are put directly from the element itself.
                </p>
                <textarea style="height: 100px; min-width: 100%; bottom:0;" id="html-input">
                &lt;p style="color: red"&gt; &lt;/p&gt;
                </textarea>
            </div>
        </div>
      </div>


      </div>

      <div class="container-fluid text-center" style="margin: 130px 0px">
      <a href="css-page-2.php">
        <button class="btn btn-primary px-5 py-3 mb-5">Next Page!</button>
      </a>
      </div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>