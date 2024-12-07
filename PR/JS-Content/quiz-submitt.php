<?php
include 'C:\xampp\htdocs\PR\database.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['submit'])) {
      sleep(0.5);
      $username = $_SESSION['username'];
      $score = $_POST['dataResult'];
      $sql = "UPDATE quiz_data SET quiz_3 = $score, quiz_completion = quiz_completion + 1 WHERE username = '$username' ";
      $result = "SELECT * FROM quiz_data WHERE username='$username'";
      mysqli_query($conn, $sql);
      $data = mysqli_query($conn, $result);
      $newData = mysqli_fetch_assoc($data);
      $_SESSION['quizThree'] = $newData['quiz_3'];
      $_SESSION['quizCount'] = $newData['quiz_completion'];
      header("location: /pr/js-content/quiz3.php"); 
      exit();
    }
}


?>