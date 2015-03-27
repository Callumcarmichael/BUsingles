<?php
    require_once("../includes/session.php");
    require_once("../includes/connect.php");
    require_once("../includes/functions.php");

    if(isset($_POST["register"])) {
        $username = $_POST["username"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $hair = $_POST["hair"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $university_course = $_POST["university_course"];
        $biography = $_POST["biography"];
        
    if(strcmp($password1, $password2) == 0) {
            
            $query = "INSERT INTO users (username, password, firstname, lastname, hair, age, gender,biography) VALUES ('{$username}', '{$password1}', '{$firstname}', '{$lastname}','{$hair}', '{$age}', '{$gender}', '{$biography}')";

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

    redirectTo("profile.php");

?>