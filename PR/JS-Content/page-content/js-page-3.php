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
                      <a class="dropdown-item" href="js-page-2.php">JS Lesson 1: Variables</a>
                      <a class="dropdown-item active" href="js-page-3.php">JS Lesson 2: Arithmetic Operators and Increments</a>
                      <a class="dropdown-item" href="js-page-4.php">JS Lesson 3: If-Else Statements and Logical Operators</a>
                      <a class="dropdown-item disabled" href="#">More coming soon!</a>
                  </div>
                </div>
            </div>
        </div>
      </header>
    <div class="container-xxl" style="padding-top: 150px">
        <h1 class="text-center">
            Arithmetic Operators
        </h1>
        <h4 class="text-center">
            Arithmetic Operators are self-explanatory. Operators are used for computing maths and etc.
        </h4>
        <table class="table my-5">
            <thead class="table-dark">
              <tr>
                <th scope="col">Operator</th>
                <th scope="col">Operator Symbol</th>
                <th scope="col">Description</th>
                <th scope="col">Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Addition</th>
                <td>+</td>
                <td>Gives the sum of the number</td>
                <td>let x = 1 + 1</td>
              </tr>
              <tr>
                <th scope="row">Subtraction</th>
                <td>-</td>
                <td>Gives the difference of the number</td>
                <td>let x = 1 - 1</td>
              </tr>
              <tr>
                <th scope="row">Multiplication</th>
                <td>*</td>
                <td>Multiplies the numbere</td>
                <td>let x = 2 * 2</td>
              </tr>
              <tr>
                <th scope="row">Division</th>
                <td>/</td>
                <td>Divides the nunmber</td>
                <td>let x = 4 / 2</td>
              </tr>
              <tr>
                <th scope="row">Modular</th>
                <td>%</td>
                <td>Gives the Remainder of a number</td>
                <td>let x = 4 % 2</td>
              </tr>
            </tbody>
          </table>
    </div>

    <div class="container-xxl" style="padding-top: 50px">
        <h4 class="text-center"style="font-weight: normal;">
            You can combine the assignment operator and arithmetic operator to use it as an increment, subtraction, multiplication and division
        </h4>
        <table class="table my-5">
            <thead class="table-dark">
              <tr>
                <th scope="col">Operator</th>
                <th scope="col">Operator Assignment</th>
                <th scope="col">Description</th>
                <th scope="col">Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Addition</th>
                <td>+=</td>
                <td>Gives the sum of the number</td>
                <td>let x = 2 <br> x += 3</td>
              </tr>
              <tr>
                <th scope="row">Subtraction</th>
                <td>-=</td>
                <td>Gives the difference of the number</td>
                <td>let x = 2 <br> x -= 3</td>
              </tr>
              <tr>
                <th scope="row">Multiplication</th>
                <td>*=</td>
                <td>Multiplies the numbers</td>
                <td>let x = 2 <br> x *= 4</td>
              </tr>
              <tr>
                <th scope="row">Division</th>
                <td>/=</td>
                <td>Divides the numbers</td>
                <td>let x = 2 <br> x /= 4</td>
              </tr>
              <tr>
                <th scope="row">Modular</th>
                <td>%=</td>
                <td>Gives the Remainder of a number</td>
                <td>let x = 2 <br> x %= 4</td>
              </tr>
            </tbody>
          </table>
    </div>
    <div class="container-xxl my-4" style="margin-top: 100px">
        <div class="row">
            <div class="col-12"id="editorConsole">
                <h1 class="my-5">Example Of The Usage Of Arithmetic Operators:</h1>
                <textarea id="html-input" style="min-width: 100%; height: 200px;">
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
        &lt;head&gt;
    
        &lt;/head&gt;
    &lt;body&gt;
    &lt;script&gt; 
    let x = 10; // variable
    let y= 20;
    let sum = x + y;
    document.write(sum)
    document.write("&lt;br&gt;") // creates a new line
    x += y; 
    document.write(x) 
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
    <div class="container-xxl" style="margin-top: 145px">
        <h1>Incremental and Decremental Operators</h1>
        <p>Incremental Operators are for Increasing or Decreasing the current number</p>
        <h3 class="mt-5">There are two types of increments.</h3>
        <div class="container-md bg-light" style="border-left: 5px green solid">
            <h1>Pre-fix</h1>
            <p>Prefix Increments are defined like this: ++x;--x;. It immediately increases/decreases the number</p>
        </div>
        <div class="container-md bg-light" style="border-left: 5px green solid">
            <h1>Post-fix</h1>
            <p>Postfix Increments are defined like this: x++; x--;. It first gives the value and the next time the value is used, it will increment/decrement.</p>
        </div>
    </div>
    <div class="container-xxl my-4" style="margin-top: 100px">
        <div class="row">
            <div class="col-12"id="editorConsole-b">
                <h1 class="my-5">Example:</h1>
                <textarea id="html-input-b" style="min-width: 100%; height: 200px;">
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
        &lt;head&gt;
    
        &lt;/head&gt;
    &lt;body&gt;
    &lt;script&gt; 
    let x = 1;
    x++; //increments the variable
    document.write(x)
    document.write("&lt;br&gt;") // creates a new line
    &lt;/script&gt;
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

    <div class="container-fluid text-center my-5">
        <a href="js-page-4.php">
            <button class="btn btn-primary px-5 py-3 mb-5">Next Page!</button>
        </a>
      </div>
<script src="executor-b.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>