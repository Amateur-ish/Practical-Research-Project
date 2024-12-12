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
  <title>HTML: HTML Lesson 1</title>
  <link rel="shortcut icon" href="/pr/images/webcraft_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="navigation-stuff.css">
  <link rel="stylesheet" href="content-style-2.css">
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
                <h4 style="text-align: right">Lesson: 1/1</h4>
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
                        <li><a class="dropdown-item" href="html-page-1.php">HTML Web Development Introduction</a></li>
                        <li><a class="dropdown-item active" href="html-page-2.php">HTML Lesson 1: Basic HTML Tags</a></li>
                        <li><a class="dropdown-item disabled" href="#">More coming soon!</a></li>
                    </div>
                </div>
            </div>
        </header>
    <div class="container-xxl" id="html-intro">
        <h1 class="text-center">HTML Basic Structure</h1>
        <h4 class="text-center pb-5" style="font-weight: normal;">These are the basic building blocks to making your first website!</h4>
        <div class="row justify-content-around">
            <div class="col-12 col-md-2 col-md-4">
                <div class="card pb-5 my-2" style="height: 340px;">
                    <h2 class="card-title text-center my-3 mx-4">HTML / !DOCTYPE html</h2>
                    <p class="card-text text-center my-3 mx-4">HTML defines the entire HTML Website for the website.the DOCTYPE html declaration should always be on the top of the HTML element, so that the browser knows that this is an HTML type and knows what to do.</p>
                </div>
            </div>
            <div class="col-12 col-md-2 col-md-4">
                <div class="card pb-5 my-2 my-2"  style="height: 340px;">                    
                    <h2 class="card-title text-center my-3 mx-4">HEAD</h2>
                    <p class="card-text text-center my-3 mx-4">Stores the Meta data and content of the website. This is where the CSS, Some JavaScripts, Titles and others go.</p>
                </div>
            </div>
            <div class="col-12 col-md-2 col-md-4">
                <div class="card pb-5 my-2"  style="height: 340px;">    
                    <h2 class="card-title text-center my-3 mx-4">BODY</h2>
                    <p class="card-text text-center my-3 mx-4">This is where all of the HTML Content goes.</p>
                </div>
            </div>
        </div>
      </div>
      <div class="container-xxl my-5">
        <h1 class="text-center">HTML Basic Tags</h1>
        <h4 class="text-center" style="font-weight: normal;">
            These are the basic HTML tags that you can use as a foundation to create your first webpage. Here are the following tags that you can utilize below:
        </h5>
    </div>
    <div class="container-xxl my-5">
        <div class="row px-5" style="padding-bottom: 100px;">
            <div class="col-12 my-3">
                <h1>Heading Tag (h1)</h1>
                <p> 
                    Heading tag are bold tags that are declared as &lt;h1&gt; to &lt;h6&gt;. &lt;h1&gt; is the biggest font-size while &lt;h2&gt;, &lt;h3&gt; to &lt;h6&gt;
                </p>
            </div>
            <div class="col-12 my-3">
                <h1>Paragraph Tag</h1>
                <p> 
                   Paragraph tags are declared as &lt;p&gt;. These are where you put your texts and paragraphs.
                </p>
            </div>
            <div class="col-12 my-3">
                <h1>Break Tag</h1>
                <p>
                   Break Tags are declared as &lt;br&gt;. These tags purpose is to separate a line, paragraph or section.
                </p>
            </div>
        </div>
        <div class="row">
            <h1>An Example of a Basic HTML Page Applying the Information Above:</h1>
            <div class="col-12 col-md-6">
                <h1>Input:</h1>
                <div class="card my-3 mx-3" style="background: none; border: none;">
                    <!-- Text Area with HTML code inside -->
                    <textarea style="height: 250px" id="html-input">
                        &lt;!DOCTYPE html&gt;
                        &lt;html&gt;
                        &lt;head&gt;
                        &lt;/head&gt;
                        &lt;body&gt;
                            &lt;h1&gt;One Piece&lt;/h1&gt;
                            &lt;h2&gt;By Eiichiro Oda&lt;/h2&gt;
                            &lt;h3&gt;Chapter: 1&lt;/h3&gt;
                            &lt;p&gt;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe amet nesciunt quas temporibus id sapiente blanditiis, laboriosam, unde impedit voluptas, perferendis alias reiciendis tempore aliquid quos asperiores officia quod at!
                            &lt;br&gt; &lt;!--This is a break line. --&gt; 
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe amet nesciunt quas temporibus id sapiente blanditiis, laboriosam, unde impedit voluptas, perferendis alias reiciendis tempore aliquid quos asperiores officia quod at!
                            &lt;/p&gt; 
                            &lt;h4&gt;Footer Footer&lt;/h4&gt;
                        &lt;/body&gt;
                        &lt;/html&gt;
                    </textarea>
                </div>
            </div>
            <div class="col-12 col-md-6 my-3" id="the-output">
                <h1>Output:</h1>
                <iframe allowfullscreen="true" id="htmlOutput" style="border: 2px black solid; width: 100%; height: 250px;"></iframe>
            </div> 
        </div>
        <button class="btn btn-success text-light ml-3" type="button" id="execute">Run</button>
    </div>

    <div class="container-fluid text-center">
        <a href="quiz.php">
            <button class="btn btn-info text-light px-5 py-3 mb-5">Start Quiz!</button>
        </a>
    </div>



<script src="executor-a.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>