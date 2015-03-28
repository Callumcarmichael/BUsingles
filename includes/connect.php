<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "twaldock");
    define("DB_PASS", "A0nIOtFuUnY=");
    define("DB_NAME", "twaldock");

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
        );
    }
?>