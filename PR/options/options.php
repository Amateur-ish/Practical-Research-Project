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
    <title>Webcraft: Home</title>
    <link rel="shortcut icon" href="/pr/images/webcraft_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="options.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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

    </div>
    <div class="container-fluid" id="welcome-section">
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
    
    <div class="container-fluid mt-5">
        <h1 class="ml-3">Select or Swipe to navigate</h1>
    </div>
    <div class="container-fluid mb-4 ">
        <div class="container-xl d-flex justify-content-around option-select">
            <div class="mvment cards">
                <!-- <img src="html-card.png" class="html-card nav-cards img-fluid mx-3">        
                <img src="css-card.png" class="css-card nav-cards img-fluid mx-3">
                <img src="js-card.png" class="js-card nav-cards img-fluid mx-3">
                <img src="js-card.png" class="js-card nav-cards img-fluid mx-3">
                <img src="js-card.png" class="js-card nav-cards img-fluid mx-3">
                
                    
                -->

                <div class="card" style="width: 18rem"> 
                    <div class="img-card"></div>
                    <h5 class="card-title"> Lorem Ipsum </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorem, amet hic distinctio et error voluptas laboriosam laudantium velit non ipsam, nulla eligendi unde asperiores autem deleniti enim odit doloremque!
                    </p>
                    <button class="btn btn-primary mb-4 ml-4" style="width: 14rem"> Lorem Ipsum</button>
                </div>
                <div class="card" style="width: 18rem"> 
                    <div class="img-card"></div>
                    <h5 class="card-title"> Lorem Ipsum </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorem, amet hic distinctio et error voluptas laboriosam laudantium velit non ipsam, nulla eligendi unde asperiores autem deleniti enim odit doloremque!
                    </p>
                    <button class="btn btn-primary mb-4 ml-4" style="width: 14rem"> Lorem Ipsum</button>
                </div>
                <div class="card" style="width: 18rem"> 
                    <div class="img-card"></div>
                    <h5 class="card-title"> Lorem Ipsum </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorem, amet hic distinctio et error voluptas laboriosam laudantium velit non ipsam, nulla eligendi unde asperiores autem deleniti enim odit doloremque!
                    </p>
                    <button class="btn btn-primary mb-4 ml-4" style="width: 14rem"> Lorem Ipsum</button>
                </div>
                
                <?php
                // content loader
                // Magulo na putanginang code
                $sql = "SELECT * FROM `module_data` ";
                $output = mysqli_query($connect, $sql);
                $lesson_output = mysqli_query($connect, "SELECT * FROM `module_lessons`");
                $customModuleCount = 0;

                if(mysqli_num_rows($output)) {
                    while (($row = mysqli_fetch_assoc($output)) && ($row2 = mysqli_fetch_assoc($lesson_output))) {
                        $nameMod = $row2['module_name'];
                        $lessonDes = $row2['lesson_desig'];
                        ?>
                        
                        <div class="card" style="width: 18rem"> 
                        <div class="img-card" id=<?php echo $row['module_desig']?> style=<?php $img = $row['module_img']; echo "\"background-image: url('$img')\"" ?> >
                            
                        </div>
                        <h5 class="card-title"><?php echo $row['module_name']; ?></h5>
                        <p class="card-text">
                            <?php echo $row['module_desc'] ; ?>
                        </p>
                        <form action="/pr/customcreatedmodule/content-page.php" method="get">
                            <input name="customModule"  value=<?php echo "\"$nameMod\""; ?>  style="display: none;">
                            <button class="btn btn-primary mb-4 ml-4" style="position: absolute; width: 14rem; bottom: 1;" type="submit" name=<?php echo "$nameMod" ?> 
                            >Go to Topic!</button>
                        
                        
                        </form>
                        <form action="/pr/adminpanel/lesson-edit.php" method="get">
                            <input name="customModule"  value=<?php echo "\"$nameMod\""; ?>  style="display: none;">
                            <button class="btn btn-success mb-4 ml-4" style="position: absolute; width: 14rem; bottom: 0;" type="submit" name=<?php echo "$nameMod" ?> 
                            >EDIT</button>
                        </form>
                        </div>
                    <?php
                    }   
                }

                ?>
                <div class="card" style="width: 18rem"> 
                    <div class="img-card" style="background-image: url('team-building-clipart-md.png');"></div>
                    <h5 class="card-title"> Create New Module </h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorem, amet hic distinctio et error voluptas laboriosam laudantium velit non ipsam, nulla eligendi unde asperiores autem deleniti enim odit doloremque!
                    </p>
                    <a href="/pr/adminpanel/module-create.html  "><button class="btn btn-primary mb-4 ml-4" style="width: 14rem"> Lorem Ipsum</button></a>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around">
            <i class="fa fa-arrow-left fa-2xl" id="arrowLeft" aria-hidden="true"></i>
            <i class="fa fa-arrow-right fa-2xl" id="arrowRight" aria-hidden="true"></i>    
        </div>
    </div>
<!-- User Statistics I swear to God -->
    <div class="card user-stats px-5" style="width: 70%">
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