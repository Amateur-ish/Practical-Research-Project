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
        <h1>Test your knowledge on HTML!</h1>
        <form id="quizForm">
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
            </div>
            <button type="button" onclick="submitQuiz()">Submit Quiz</button>

        </form>
        <div id="result"></div>
      </div>
    </div>
</div>

  <script src="quiz.js"></script>
</body>
</html>