<?php
  include 'C:\xampp\htdocs\PR\database.php';
  session_start();
  // If the user already has taken the quiz then show their results.
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Quiz</title>
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
        <form id="quizForm" action="quiz.php" method="post">
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
            <p>This provides HTML elements more detail and helps to control the behaviour.</p>
            <div class="options">
              <label><input type="radio" name="q4" value="Attributes"> Attributes</label>
              <label><input type="radio" name="q4" value="Semantic Element"> Semantic Element</label>
              <label><input type="radio" name="q4" value="HTML Tags"> HTML Tags</label>
              <label><input type="radio" name="q4" value="Reference"> Reference</label>
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
          <div class="question" id="full-result">
            <p> You got 
              <?php
              echo $_SESSION['quizOne'];
              ?>
            </p>
          </div> 
      </form>
      </div>
</div>
<script src="quiz.js"></script>
<?php
  if ($_SESSION['quizOne'] == NULL){

  }
  else {
    echo "<script> 
    const allQuestions = document.querySelectorAll('.question');
    const quizOverall = document.querySelector('#full-result');


    setTimeout(() => {
    allQuestions.forEach((question, index) => {
      question.style.display = 'none';
      quizOverall.display = 'block';
  });
    
  }, 1000);
    </script>";
  }
?>
</body>
</html>

<?php
  // AAAAAAAAAA THE CRAMMING IS SO REAL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['submit'])) {
      sleep(5);
      $username = $_SESSION['username'];
      $score = $_POST['dataResult'];
      $sql = "UPDATE quiz_data SET quiz_1 = $score WHERE username = '$username' ";
      $result = "SELECT * FROM quiz_data WHERE username='$username'";
      mysqli_query($conn, $sql);
      $data = mysqli_query($conn, $result);
      $newData = mysqli_fetch_assoc($data);
      $_SESSION['quizOne'] = $newData['quiz_1'];
      header("location: /pr/HTML-Content/quiz.php"); 
    }
}
?>