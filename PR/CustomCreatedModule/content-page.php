<?php
include 'C:\xampp\htdocs\PR\database.php';
include 'C:\xampp\htdocs\PR\contentdatabase.php';
session_start();
if ($_SESSION['username'] === NULL) {
    header('location: /pr/');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSS: CSS Lesson 1</title>
  <link rel="shortcut icon" href="/pr/images/webcraft_logo.png" type="image/x-icon">
  <link rel="stylesheet" href="navigation-stuff.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>
<body>
    <header class="container-fluid" style="position: fixed">
        <div class="row">
            <div class="col-4 col-md-8 col-lg-9">
                <h1 class="logo-text d-none d-md-block">Webcraft</h1>
                <img src="webcraft_logo.png" alt="" class="logo">
            </div>

            <div style="float: right" class="col-8 col-md-4 col-lg-3 d-flex justify-content-center">
                <div class="progression pr-3" style="margin: auto;">
                    <h4 class="border bg-success rounded-pill px-3 pb-1 text-light"style="text-align: right; font-weight: normal;">Beginner</h1>
                    <h4 style="text-align: right">Lesson: 1/2</h4>
                </div>

                <div class="dropdown ml-5" style="float: right;">
                    <button class="btn burger-menu dropdown-toggle" id="burgerMenu dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height:50px; width: 50px; margin: auto;";>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/pr/options/options.php">Home</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header">Beginner</h6></li>
                        <a class="dropdown-item" href="css-page-1.php">CSS Introduction</a>
                        <a class="dropdown-item" href="css-page-1.php">Add More Lessons</a>
                        <a class="dropdown-item disabled" href="#">More coming soon!</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Insert the Content here -->
     <div class="container-xxl" style="padding-top: 280px">
        <?php
            if($_SERVER['REQUEST_METHOD'] === "GET") {
                $targetModule = $_GET['customModule'];
                $sql = "SELECT * FROM `module_lessons` 
                WHERE module_name = '$targetModule' AND lesson_desig = 'content_page_1'";
                $output = mysqli_query($connect, $sql);
                try {
                    $loadcontent = mysqli_fetch_assoc($output);
                    echo $loadcontent['lesson_cont'];
                }
                catch (mysqli_sql_exception) {
                    echo "error";
                }
            }
        ?>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>
