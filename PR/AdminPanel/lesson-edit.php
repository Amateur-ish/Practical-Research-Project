<?php
  include 'C:\xampp\htdocs\PR\database.php';
  include 'C:\xampp\htdocs\PR\contentdatabase.php';
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
  <title>Module Creation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="navigation-stuff.css">
  <link rel="stylesheet" href="lesson-edit.css">
</head>
<body>
    <!-- TODO: Bumaliw sa pag-gagawa ng lesson editor -->
  <header class="container-fluid" style="position: fixed; z-index: 69; background-color: #dceefc;">
    <div class="row">
        <div class="col-6">
            <h1 class="logo-text">Module Create</h1>
            <img src="webcraft_logo.png" alt="" class="logo">
        </div>
        <div class="col-6">
          <button class="btn btn-danger btn-right mt-4" type="submit" value="logout" name="logout" style="float: right; padding: 10px 30px">Go Back</button>
        </div>
    </div>  
  </header>

  <div class="container-xl customize-bar" style="padding-top: 250px">
    <form method="post" action="lesson-create-this.php">
        <div class="row">
            <textarea style="min-width: 100%; height:1000px;"
            name="lessoncontedit"
            value= <?php 
            if($_SERVER['REQUEST_METHOD'] === "GET") {
                $targetModule = $_GET['customModule'];
                $sql = "SELECT * FROM `module_lessons` 
                WHERE module_name = '$targetModule' AND lesson_desig = 'content_page_1'";
                $output = mysqli_query($connect, $sql);
                try {
                  $loadcontent = mysqli_fetch_assoc($output);
                  $loadLessonData = $loadcontent['lesson_cont'];
                  $loadModuleName = $loadcontent['module_name'];
                  $loadModuleLesson = $loadcontent['lesson_desig'];
                  echo "\"$loadLessonData\"";
                }
                catch (mysqli_sql_exception) {
                  echo "error";
                }
              }
            ?>
            >
            <?php echo $loadcontent['lesson_cont']; ?>  
          </textarea>
            <input name="moduleName" value=<?php echo "\"$loadModuleName\""?> style="display:none">
            <input name="lessonDesig" value=<?php echo "\"$loadModuleLesson\""?> style="display:none">>
            <button class="btn btn-primary mb-5" type="submit">SUBMIT</button>
        </div>
    </form>
  </div>


  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>