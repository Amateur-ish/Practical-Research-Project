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
    <title>HTML Quiz</title>
    <link rel="shortcut icon" href="/pr/images/webcraft_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <header>
        <h1 class="logo-text">Webcraft</h1>
        <img src="webcraft_logo.png" alt="" class="logo">
    </header>

    <div class="quiz-body">
    <div class="quiz-container">
        <h1 id="title-h1">
        <?php
        if ($_SESSION['quizOne'] == NULL) {
          echo "Test your knowledge on HTML!";
        }
        else {
          echo "Quiz Results:";
        }
        ?>
        </h1>
        <form id="quizForm" action="quiz-submitt.php" method="post">
          <div class="question" id="q1">
            <p>1. What does HTML stands for?</p>
            <div class="options">
              <label><input type="radio" name="q1" value="Paris"> HyperMedia Text Markup Language</label>
              <label><input type="radio" name="q1" value="London"> High-level Text Markup Language</label>
              <label><input type="radio" name="q1" value="Hypertext Markup Language"> Hypertext Markup Language</label>
              <label><input type="radio" name="q1" value="Madrid"> Hyperlink Markup Language</label>
            </div>
            <button type="button" onclick="nextQuestion(1)">Next</button>
          </div>
    
          <div class="question" id="q2">
            <p>2. This is where all of the content of the HTML is written</p>
            <div class="options">
              <label><input type="radio" name="q2" value="Body">Body</label>
              <label><input type="radio" name="q2" value="Head"> Head </label>
              <label><input type="radio" name="q2" value="Header"> Header </label>
              <label><input type="radio" name="q2" value="Title"> Title</label>
            </div>
            <button type="button" onclick="nextQuestion(2)">Next</button>
          </div>
    
          <div class="question" id="q3">
            <p>3. This is where the metadata and informations is written</p>
            <div class="options">
              <label><input type="radio" name="q3" value="Body">Body</label>
              <label><input type="radio" name="q3" value="Head">Head</label>
              <label><input type="radio" name="q3" value="Header">Header</label>
              <label><input type="radio" name="q3" value="Title">Title</label>
            </div>
            <button type="button" onclick="nextQuestion(3)">Next</button>
          </div>
    
          <div class="question" id="q4">
            <p>This tag breaks and creates a new line for paragraphs.</p>
            <div class="options">
              <label><input type="radio" name="q4" value="br">&lt;br&gt;<label>
              <label><input type="radio" name="q4" value="hr">&lt;hr&gt;</label>
              <label><input type="radio" name="q4" value="break">&lt;break&gt;</label>
              <label><input type="radio" name="q4" value="rtrn"> &lt;rtrn&gt;</label>
            </div>
            <button type="button" onclick="nextQuestion(4)">Next</button>
          </div>
    
          <div class="question" id="q5">
            <p>Which of the following is the tag for the HTML below?</p>
            <h1>Hello!</h1>
            <div class="options">
              <label><input type="radio" name="q5" value="p"> p</label>
              <label><input type="radio" name="q5" value="h1"> h1</label>
              <label><input type="radio" name="q5" value="h2"> h2</label>
              <label><input type="radio" name="q5" value="Header"> Header</label>
              <input type="text" id="dataResult" name="dataResult" value="" style="display: none;">
              <button type="submit" onclick="submitQuiz()" name="submit" id="submit">Submit Quiz</button>
            </div>
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
                echo $_SESSION['quizOne'];
                ?>
              </span>
               out of 5
            </p>
            <a href="/pr/options/options.php" style="text-decoration: none;">
              <button onclick=""type="button">Back to Home Page</button>
          </div> 
      </form>
      </div>
</div>
<script src="quiz.js"></script>
<?php
  if ($_SESSION['quizOne'] != NULL){
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

