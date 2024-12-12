<?php
include 'database.php';
session_start();

function redirect_to($url) {  
  header('location: ' . $url);
}
 
if($_SERVER["REQUEST_METHOD"] == "POST") {
 if(isset($_POST["signIn"])) {
    $username = filter_input(INPUT_POST, 'username1', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password1', FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username) && empty($password)) {
      echo "<script>alert('Please input a username or password') </script>";
      exit();
    }
    $sql = "SELECT * FROM user WHERE username='$username' ";
    $sql2 = "SELECT * FROM quiz_data WHERE username='$username'";
    $result = mysqli_query($conn, $sql);


    if(mysqli_num_rows($result) === 1) {
      $result2 = mysqli_query($conn, $sql2);
      $row = mysqli_fetch_assoc($result);
      $HashedPassword = $row['password']; 


      if ($row['username'] === $username && password_verify($password, $HashedPassword)) {
        $data = mysqli_fetch_assoc($result2);
        // Lol holy global variable spam
        $_SESSION['username'] = $username;
        $_SESSION['quizOne'] = $data['quiz_1'];
        $_SESSION['quizTwo'] = $data['quiz_2'];
        $_SESSION['quizThree'] = $data['quiz_3'];
        $_SESSION['quizCount'] = $data['quiz_completion'];
        redirect_to('/pr/options/options.php');
        exit();
      }
      else {
        echo "<script>alert('Invalid Password');
            window.location.href='/pr/';
            </script>";
        exit();
        }
    }
    else {
      echo "<script>alert('Invalid Username');
      window.location.href='/pr/';
      </script>";
      exit();
    }
  }
}


?>