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
    <title>Javascript Quiz</title>
    <link rel="stylesheet" href="quiz3.css">
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
                  if ($_SESSION['quizThree'] == NULL) {
                    echo "Test your knowledge on HTML!";
                  }
                  else {
                    echo "Quiz Results:";
                  }
          ?>
        </h1>
        <form id="quizForm" action="quiz-submitt.php" method="post">
          <div class="question" id="q1">
            <p>1. What is Javascript?</p>
            <div class="options">
              <label><input type="radio" name="q1" value="correctans1"> It is a programming language primarily used to make web pages interactive.</label>
              <label><input type="radio" name="q1" value="London"> It is a database management system. </label>
              <label><input type="radio" name="q1" value="wonkwonk"> It is a markup language used to structure web content.</label>
              <label><input type="radio" name="q1" value="Madrid"> It is a programming language used for video editing.</label>
            </div>
            <button type="button" onclick="nextQuestion(1)">Next</button>
          </div>
    
          <div class="question" id="q2">
            <p>2. Which of the following is <span style="font-weight: bold;">NOT CORRECT </span>about Adding Javascript to webpages?</p>
            <div class="options">
              <label><input type="radio" name="q2" value="correctans2"> Adding Javascript to webpages only works if it's inside the body tag.</label>
              <label><input type="radio" name="q2" value="Dickens"> It can be connected to HTML using External Javascript.</label>
              <label><input type="radio" name="q2" value="Austen"> Javascript can be connected to HTML using Internal Javascript. </label>
              <label><input type="radio" name="q2" value="Hemingway"> There are two main ways on adding Javascript to Webpages. </label>
            </div>
            <button type="button" onclick="nextQuestion(2)">Next</button>
          </div>
    
          <div class="question" id="q3">
            <p>3. Check if the following code is correct: <br>
              let x = 30 <br>
              let y= 20 <br>
              if (x.GreaterThan(y)) { <br>
                document.write("Greater Than Y") <rb></rb>
              }
            </p>
            <div class="options">
              <label><input type="radio" name="q3" value="Mercury">Yes, it prints out that x is greater than y</label>
              <label><input type="radio" name="q3" value="Mars">No, it returns as false therefore the code does not run</label>
              <label><input type="radio" name="q3" value="blah"> Yes, using the Greater Than Method you can see if the variable is greater than another variable.</label>
              <label><input type="radio" name="q3" value="correctans3">No, it does not work as it gives an error</label>
            </div>
            <button type="button" onclick="nextQuestion(3)">Next</button>
          </div>
    
          <div class="question" id="q4">
            <p>4. I.  Variables are containers for storing data.<br>
                    II.  String is a Data type for text</p>
            <div class="options">
              <label><input type="radio" name="q4" value="Atlantic"> The following statements are False.</label>
              <label><input type="radio" name="q4" value="correctans4"> The following statements are True.</label>
              <label><input type="radio" name="q4" value="Pacific"> The first statement is True while the second is False.</label>
              <label><input type="radio" name="q4" value="">The second statement is True while the second is False. </label>
            </div>
            <button type="button" onclick="nextQuestion(4)">Next</button>
          </div>
    
          <div class="question" id="q5">
            <p>5. Which of the following is <span style="font-weight: bold;">NOT CORRECT </span> about Javascript?</p>
            <div class="options">
              <label><input type="radio" name="q5" value="Da Vinci"> It is one of the core technologies of web development alongside HTML and CSS. </label>
              <label><input type="radio" name="q5" value="correctans5"> Javascript is the most difficult programming language.</label>
              <label><input type="radio" name="q5" value="Picasso">  JavaScript enables dynamic content such as real-time updates, interactive forms, animations, and more.</label>
              <label><input type="radio" name="q5" value="correct5">  It can run in the browser (client-side) or on servers (using Node.js).
              </label>
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
                echo $_SESSION['quizThree'];
                ?>
              </span>
               out of 5
            </p>
            <a href="/pr/options/options.php" style="text-decoration: none;">
              <button type="button" name="">Back to Home Page</button>
            </a>
          </div> 
        </form>
    </div>
</div>

  <script src="quiz3.js"></script>
  <?php
  if ($_SESSION['quizThree'] != NULL){
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