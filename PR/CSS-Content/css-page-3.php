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
                        <a class="dropdown-item" href="css-page-1.php">CSS Introduction</a>
                        <a class="dropdown-item" href="css-page-2.php">CSS Lesson 1: CSS Selectors</a>
                        <a class="dropdown-item active" href="css-page-3.php">CSS Lesson 2: Text styles, Background-Color and Borders</a>
                        <a class="dropdown-item disabled" href="#">More coming soon!</a>
                    </div>
                </div>
            </div>
          </header>
        </div>
      </header>

      <div class="container-xxl" style="padding-top:200px">
        <h1 class="text-center">
            Font and Text Styles
        </h1>
        <h4 class="text-center" style="font-weight: normal; margin-bottom: 70px;">The Following below is used to design and adjust font appearances</h4>
        <div class="row bg-white" style="border-radius: 10px">
            <div class="col-12 mt-3">
                <h4 style="font-weight: normal;"> 
                    <span style="font-weight: bold;">font-size</span> - adjusts the font-size.</h4>
            </div>
            <hr>
            <div class="col-12">
                <h4 style="font-weight: normal;"> 
                    <span style="font-weight: bold;">text-decoration</span> - selects and adds a decoration to the specified text. Examples such as italic, oblique, etc.</h4>
            </div>
            <hr>
            <div class="col-12">
                <h4 style="font-weight: normal;"> <span style="font-weight: bold;">font-family</span> - changes the typeface of a font. Basically changing the font design using HTMLs list of font-families.</h4>
            </div>
            <hr>
            <div class="col-12">
                <h4 style="font-weight: normal;"> <span style="font-weight: bold;">text-align</span> - specifies the position of a text.</h4>
            </div>
        </div>
      </div>

      <div class="container-xxl my-4" style="margin-top: 100px">
        <div class="row">
            <div class="col-12"id="editorConsole">
                <h1 class="my-5">How the Font Styles Work in Action</h1>
                <textarea id="html-input" style="min-width: 100%; height: 200px;">
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
        &lt;head&gt;
        &lt;style&gt;
        h1 {
            font-size: 20px; /* this sets the text size to 20px */
            font-family: Arial; /* this sets the font to Arial*/
            text-align: center; /* this positions the text to the center*/
            text-decoration: underline; /* this underlines the text */
        }
        &lt;/style&gt;
        &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;This is the designed h1 element &lt;/h1&gt;
        &lt;h2&gt;A default h2 text&lt;/h2&gt;
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

    <div class="container-xxl" style="padding-top:50px">
        <h1 class="text-center">
            Background and Colour
        </h1>
        <h4 class="text-center mb-5" style="font-weight: normal;">The Following below is used to design and adjust font appearances</h4>
        <div class="row bg-white" style="border-radius: 10px">
            <div class="col-12 mt-3">
                <h4 style="font-weight: normal;"> 
                    <span style="font-weight: bold;">color</span> - changes the text color</h4>
            </div>
            <hr>
            <div class="col-12">
                <h4 style="font-weight: normal;"> 
                    <span style="font-weight: bold;">background-color</span> - changes the background color of an element</h4>
            </div>
            </div>
        </div>
      </div>

      <div class="container-xxl my-4" style="margin-top: 100px">
        <div class="row">
            <div class="col-12"id="editorConsole">
                <h1 class="my-5">Example:</h1>
                <textarea id="html-input-b" style="min-width: 100%; height: 200px;">
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
        &lt;head&gt;
        &lt;style&gt;
        body {
            background-color: red; /* this sets the background of the body to red*/
            color: blue; /* All text will turn blue*/
        }
        &lt;/style&gt;
        &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Lorem Ipsum&lt;/h1&gt;
        &lt;h2&gt;Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias doloribus obcaecati dicta autem quam illo dolorem reprehenderit repudiandae perferendis rem culpa eligendi non, porro eveniet? Possimus nesciunt molestiae perspiciatis nobis.text&lt;/h2&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                </textarea>
                <br>
            </div>
            <div class="col-12" id="the-output">
                <iframe allowfullscreen="true" id="htmlOutput-b" style="min-width:100%; height: 200px; border: 2px black solid;">    
                </iframe>
            </div>
        </div>
        <button class="btn btn-primary" id="execute-b">Execute</button>
    </div>

    <div class="container-xxl" style="padding-top:50px">
        <h1 class="text-center">
            Borders
        </h1>
        <h4 class="text-center mb-5" style="font-weight: normal;">Borders are designs for the edges of the element.</h4>
        <div class="row bg-white" style="border-radius: 10px">
            <div class="col-12 mt-3">
                <h4 style="font-weight: normal;"> 
                    <span style="font-weight: bold;">border</span>- There are three outputs you have to set when it comes to setting a border: <br>
                thickness of the border, color, and the style of border(solid, dashed, dot, outset, ridget, double, etc).</h4>
            </div>
            <hr>
            <div class="col-12">
                <h4 style="font-weight: normal;"> 
                    <span style="font-weight: bold;">border-radius</span> - rounds the border of an element.</h4>
            </div>
            </div>
        </div>
      </div>
      <div class="container-xxl my-4" style="margin-top: 100px">
        <div class="row">
            <div class="col-12"id="editorConsole">
                <h1 class="my-5">Example:</h1>
                <textarea id="html-input-c" style="min-width: 100%; height: 200px;">
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
        &lt;head&gt;
        &lt;style&gt;
        #id { 
            background-color: white;
            border: 2px red solid; /* this sets the background of the body to red*/
            border-radius: 10px;
        }
        &lt;/style&gt;
        &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt; Lorem ipsum &lt;/h1&gt;
        &lt;h1 id="id"&gt;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem cumque eaque, rerum, officiis omnis quas nemo, labore nesciunt iste cupiditate facilis. In eaque natus, quod iusto necessitatibus reiciendis dolorum accusantium?&lt;/h1&gt;
    &lt;/body&gt;
    &lt;/html&gt;
                </textarea>
                <br>
            </div>
            <div class="col-12" id="the-output">
                <iframe allowfullscreen="true" id="htmlOutput-c" style="min-width:100%; height: 200px; border: 2px black solid;">    
                </iframe>
            </div>
        </div>
        <button class="btn btn-primary" id="execute-c">Execute</button>
    </div>

    <div class="container-fluid text-center">
        <a href="quiz2.php">
            <button class="btn btn-success px-5 py-3 mb-5">Start Quiz!</button>
        </a>
    </div>

<script src="executor-a.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>