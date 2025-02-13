<?php
include 'C:\xampp\htdocs\PR\contentdatabase.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $module_title = $_POST['module-title'];
    $img_url = $_POST['module-thumbnail'];
    $module_desc = $_POST['module-desc'];
    $module_desig = $_POST['desig-autom'];
    $module_auth = $_SESSION['username'];
    $sql = "INSERT INTO module_data(module_name, module_desc, module_img, module_desig, module_auth)
    VALUES('$module_title', '$module_desc', '$img_url', '$module_desig', '$module_auth')   
    ";
    $sql2 = "INSERT INTO module_lessons(module_name, lesson_auth, lesson_desig) 
    VALUES('$module_title', '$module_auth', 'content_page_1')";
        mysqli_query($connect, $sql);
        mysqli_query($connect, $sql2);
        header('location: /pr/options/options.php');
        exit();
}

?>