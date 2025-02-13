<?php
include 'database.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["signUp"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        function redirect_to($url) {
          header('location: '. $url);
          die();
        }
        if(empty($username) && empty($password)) {
          echo "<script>alert('Please input a username or password') </script>";
        }
        else {
          $hash = password_hash($password, PASSWORD_DEFAULT);
          //echo $hash . "<br>";
          $sql = "INSERT INTO user(username, password, role) 
          VALUES ('$username', '$hash', 'DEFAULT-USER')";
            try {
            mysqli_query($conn, $sql);
            echo "<script>alert('You are now registered') </script>";
            $sql = "INSERT INTO quiz_data(username) 
            VALUES ('$username')";
            mysqli_query($conn, $sql);
            redirect_to("index.php");
            }
            catch(mysqli_sql_exception) {
            echo "<script>alert('Username has been taken')
            window.location.href='/pr/';
            </script>";

            }
          }
        }
    }
?>