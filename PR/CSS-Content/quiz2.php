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
    <title>CSS Quiz</title>
    <link rel="stylesheet" href="quiz2.css">
</head>
<body>
    <header>
        <h1 class="logo-text">Webcraft</h1>
        <img src="webcraft_logo.png" alt="" class="logo">
    </header>

    <div class="quiz-body">
    <div class="quiz-container">
        <h1>
        <?php
        if ($_SESSION['quizTwo'] == NULL) {
          echo "Test your knowledge on HTML!";
        }
        else {
          echo "Quiz Results:";
        }
        ?>
        </h1>
        <form id="quizForm" action="quiz-submitt.php" method="post">
          <div class="question" id="q1">
            <p>1. What does CSS stands for?</p>
            <div class="options">
              <label><input type="radio" name="q1" value="Paris"> Computer Style Sheets</label>
              <label><input type="radio" name="q1" value="London"> Cascading Statistics Sheets</label>
              <label><input type="radio" name="q1" value="correct1"> Cascading Style Sheets</label>
              <label><input type="radio" name="q1" value="Madrid"> Creativity Styling System</label>
            </div>
            <button type="button" onclick="nextQuestion(1)">Next</button>
          </div>
    
          <div class="question" id="q2">
            <p>2. This method seperates the CSS File to the HTML File.</p>
            <div class="options">
              <label><input type="radio" name="q2" value="correct2"> External CSS</label>
              <label><input type="radio" name="q2" value="Dickens"> Internal CSS</label>
              <label><input type="radio" name="q2" value="Austen"> Selectors </label>
              <label><input type="radio" name="q2" value="Hemingway"> Property </label>
            </div>
            <button type="button" onclick="nextQuestion(2)">Next</button>
          </div>
    
          <div class="question" id="q3">
            <p>3. What type of selectors targets an element with a specific ID?</p>
            <div class="options">
              <label><input type="radio" name="q3" value="Mercury"> Element Selector</label>
              <label><input type="radio" name="q3" value="Mars"> Class Selector</label>
              <label><input type="radio" name="q3" value="correct3"> ID Selector</label>
              <label><input type="radio" name="q3" value="Earth"> Font and Text</label>
            </div>
            <button type="button" onclick="nextQuestion(3)">Next</button>
          </div>
    
          <div class="question" id="q4">
            <p>4. What does the "color and background-color" represent?</p>
            <textarea id="q4kupal" rows="4" cols="6">
h1 {
    color: yellow;
    background-color: blue;
}</textarea>
            <div class="options">
              <label><input type="radio" name="q4" value="Atlantic"> Properties</label>
              <label><input type="radio" name="q4" value="correct4"> Values</label>
              <label><input type="radio" name="q4" value="Pacific"> Selectors</label>
              <label><input type="radio" name="q4" value="Arctic"> Borders</label>
            </div>
            <button type="button" onclick="nextQuestion(4)">Next</button>
          </div>
    
          <div class="question" id="q5">
            <p>5. What is the purpose of "font-family" in CSS?</p>
            <div class="options">
              <label><input type="radio" name="q5" value="Da Vinci"> It specifies the font alignment.</label>
              <label><input type="radio" name="q5" value="Van Gogh"> It sets the spacing between text.</label>
              <label><input type="radio" name="q5" value="Picasso"> It changes the font size of a text</label>
              <label><input type="radio" name="q5" value="correct5"> It defines the font to be used for the text.</label>
            </div>
            <input type="text" id="dataResult" name="dataResult" value="" style="display: none;">
            <button type="submit" onclick="submitQuiz()" name="submit">Submit Quiz</button>
            </div>
            <div class="question" id="full-result">
            <h1>
              <?php
              echo $_SESSION['username'];
              ?>
            </h1>
            <br>
            <p style="font-size: 20px"> 
              Score:
            </p>
            <p>
              <span id="total-score">
                <?php
                echo $_SESSION['quizTwo'];
                ?>
              </span>
               out of 5
            </p>
            <a href="/pr/options/options.php" style="text-decoration: none;">
              <button type="button" name="">Back to Home Page</button>
            </a>
          </div> 
        </form>
        <div id="result"></div>
      </div>
    </div>
</div>
  <script src="quiz2.js"></script>
  <?php
  if ($_SESSION['quizTwo'] != NULL){
    echo "<script> 
    const allQuestions = document.querySelectorAll('.question');
    const quizOverall = document.querySelector('#full-result');
    allQuestions.forEach((question, index) => {
      question.style.display = 'none';
      
    }); 
  quizOverall.style.display = 'block';
    
    </script>";
  }
?>
</body>
</html>