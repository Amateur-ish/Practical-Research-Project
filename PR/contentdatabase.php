<?php
    $db_server = "localhost";
    $db_user = "root";
    $pass = "";
    $name = "contentdb";
    $connect = "";
    try {
    $connect = mysqli_connect(
        $db_server, $db_user, $pass, $name
    ); 
    
    }
    catch(mysqli_sql_exception) {
        echo "connection failed";
    }
?>