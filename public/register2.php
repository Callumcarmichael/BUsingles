<?php
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");

   if(isset($_POST["register2"])) {
        $gender = $_POST["gender2"];
        $hair = $_POST["hair2"];
            
        
        
        if(strcmp($password1, $password2) == 0) {
            
            $query = "INSERT INTO test (gender2, hair2) VALUES ('{$gender2}', '{$hair2}')";

            $result = mysqli_query($connection, $query);

            if($result) {
                $_SESSION["message"] = "Success";
                
            } else {
                $_SESSION["message"] = "Failed";
                redirectto("index.php");
            }
        } else {
            $_SESSION["message"] = "Passwords dont match.";
            redirectTo("index.php");
        }

    }

    redirectTo("matchtest.php");

?>

