<?php
include 'C:\xampp\htdocs\PR\database.php';
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
    <title>Webcraft</title>
    <link rel="stylesheet" href="options.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!--<script src="anim.js"> </script> -->
</head>
<body>
    <header class="container-fluid" style="position: fixed; z-index: 69; background-color: #dceefc;">
        <div class="row">
            <div class="col-6">
                <h1 class="logo-text">Webcraft</h1>
                <img src="webcraft_logo.png" alt="" class="logo">
            </div>
            <div class="col-6">
                <form method="post" action="options.php"> 
                    <button class="btn btn-danger btn-right mt-4" type="submit" value="logout" name="logout" style="float: right; padding: 10px 30px">Log Out</button>
                </form>
            </div>
        </div>
    </header>
    <div class="container-fluid" style="padding-top: 175px">
        <div class="container-fluid" id="welcome-section" style="padding: 0px 140px;">
            <h1>
                Welcome 
                <?php
                echo $_SESSION['username'] . "!";
                ?>
                <br>
                <span style="font-size: 25px; font-weight: normal;">Hone your skills and start your coding journey today!</span>
            </h1>

        <div class="container-fluid" style="position: absolute" id="black-shade">

        </div>
    </div>
    </div>
        
    <!-- <div class="welcome-page"> 
        <h1>
            <?php
                //echo "Welcome " . $_SESSION['username'] . "!";
            ?>
        </h1>
        <img src="business.jpeg" id="imageTransition">
        <h1 id="quote">Hone your skills. Learn and craft your own website.</h1>
    </div> -->
    <div class="container-fluid mt-5">
        <h1 class="ml-3">Select or Swipe to navigate</h1>
    </div>
    <div class="container-fluid cards d-flex justify-content-around">
        <img src="html-card.png" class="html-card nav-cards img-fluid mx-3">        
        <img src="css-card.png" class="css-card nav-cards img-fluid mx-3">
        <img src="js-card.png" class="js-card nav-cards img-fluid mx-3">
    </div>
<!-- User Statistics I swear to God -->
    <div class="card user-stats px-5">
        <h1>User Dashboard</h1>
        <p> Quiz Progress:</p>
        <?php
        switch($_SESSION["quizCount"]) {
            case 0:
                echo "<progress id='quizcount' value='0' max='100'> 
                </progress>";
                break;
            case 1:
                echo "<progress id='quizcount' value='30' max='100'> 
                </progress>";
                break;

            case 2:
                echo "<progress id='quizcount' value='70' max='100'> 
                </progress>";
                break;

            case 3:
                echo "<progress id='quizcount' value='100' max='100'> 
                </progress>";
                break;

        }
        ?>
        <div class="user-data"> 
            <div class="quiz">
                <h1>Quiz One</h1>
                <p> 
                    <?php
                    if ($_SESSION['quizOne'] === NULL) {
                        echo "Not Started";
                    }
                    else {
                        echo $_SESSION['quizOne'];
                    }
                    ?>
                </p>
            </div>
            <div class="quiz"> 
                <h1>Quiz Two</h1>
                <p> 
                    <?php
                    if ($_SESSION['quizTwo'] === NULL) {
                        echo "Not Started";
                    }
                    else {
                        echo $_SESSION['quizTwo'];
                    }
                    ?>
                </p>

            </div>
            <div class="quiz"> 
                <h1>Quiz Three</h1>
                <p> 
                    <?php
                    if ($_SESSION['quizThree'] === NULL) {
                        echo "Not Started";
                    }
                    else {
                        echo $_SESSION['quizThree'];
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="switch.js"> </script>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['logout'])) {
            session_destroy();
            header('location: /pr/');
        }
    }
?>