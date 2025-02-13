<?php
  include 'C:\xampp\htdocs\PR\database.php';
  include 'C:\xampp\htdocs\PR\contentdatabase.php';
  session_start();
  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $newLessonCont = $_POST['lessoncontedit'];
    $moduleName = $_POST['moduleName'];
    $lessonDesig = $_POST['lessonDesig'];
    $sql = "UPDATE module_lessons 
    SET lesson_cont = '$newLessonCont' 
    WHERE module_name = '$moduleName' AND lesson_desig = '$lessonDesig'";
    $output = mysqli_query($connect, $sql);
    header('location: /pr/options/options.php');
    exit();
  }
?>