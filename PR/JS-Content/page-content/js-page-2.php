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
                  <a class="dropdown-item" href="js-page.php">JavaScript Introduction</a>
                  <a class="dropdown-item active" href="js-page-2.php">JS Lesson 1: Variables</a>
                  <a class="dropdown-item" href="js-page-3.php">JS Lesson 2: Arithmetic Operators and Increments</a>
                  <a class="dropdown-item" href="js-page-4.php">JS Lesson 3: If-Else Statements and Logical Operators</a>
                  <a class="dropdown-item disabled" href="#">More coming soon!</a>
              </div>
            </div>
        </div>
    </div>
  </header>
  <div class="container-xxl" style="padding-top: 150px">
    <h1 class="text-center">Variables</h1>
    <h3 class="text-center" style="font-weight: normal;">You can think variables as data containers. Variables hold data that you set on them.</h3>
    <h3 style="margin-top: 60px; font-weight: normal;">In JavaScript, there are three common types of variable declaration:</h3>
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="card my-3"  style="height: 275px">
          <h1 class="text-center"><span class="text-primary">let</span> Variable</h1>
          <h4 class="text-center" style="font-weight: normal;">
            let Variables is a variable that can be assigned any data type (integers, strings, boolean.) 
            It is flexible as it can be reassigned with a completely different data type from what it was assigned to.
          </h4>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card my-3" style="height: 276px">
          <h1 class="text-center"><span class="text-primary">const</span> Variable</h1>
          <h4 class="text-center" style="font-weight: normal;">
            const Variables are variables that CANNOT be changed or reassigned once it is declared and assigned.
          </h4>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card my-3" style="height: 275px">
          <h1 class="text-center"><span class="text-primary">var</span> Variable</h1>
          <h4 class="text-center" style="font-weight: normal;">
            var Variables are similar to let as it can be assigned with any data type. 
            The difference between the two is var CANNOT be reassigned with another data type after assignment of a data type.
          </h4>
        </div>
      </div>
    </div>
    <div class="container-xxl px-4 bg-light" style="margin-top: 100px; border-left: 5px green solid;">
      <h2 style="font-weight: normal;">
        To demonstrate, we will use <span class="text-primary">document.write</span> to showcase the variables in action.
      </h2>
      <h4 style="font-weight: normal;">
        document.write() method writes whatever you put inside it directly to the HTML Document.
      </h4>
    </div>
  </div>
  
  <div class="container-xxl my-4" style="margin-top: 100px">
    <div class="row">
        <div class="col-12"id="editorConsole">
            <h1 class="my-5">Example:</h1>
            <textarea id="html-input" style="min-width: 100%; height: 200px;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;

    &lt;/head&gt;
&lt;body&gt;
&lt;script&gt; 
let x = 1 // let Variable
const pi = 3.14 // const Variable
var Name = "John" // var Variable 
document.write(x) // Inserting variables inside document write
document.write(pi)
document.write(Name)
document.write("This is my first JavaScript!")  // Inserting text inside document write (it must be declared with speech marks)
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
            </textarea>
            <br>
        </div>
        <div class="col-12" id="the-output">
            <iframe allowfullscreen="true" id="htmlOutput" style="min-width:100%; height: 200px; border: 2px black solid;">    
            </iframe>
        </div>
    </div>
    <button class="btn btn-primary" id="execute">Execute</button>
</div>
<div class="container-fluid text-center my-5">
  <a href="js-page-3.php">
      <button class="btn btn-primary px-5 py-3 mb-5">Next Page!</button>
  </a>
</div>
<script src="executor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>