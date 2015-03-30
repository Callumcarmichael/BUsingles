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
        $uni = $_POST["uni"];
        $biography = $_POST["biography"];
        $smoker = $_POST["smoker"];
        
        
    if(strcmp($password1, $password2) == 0) {
            
            $query = "INSERT INTO users (username, password, firstname, lastname, hair, age, gender, uni, biography, smoker) VALUES ('{$username}', '{$password1}', '{$firstname}', '{$lastname}','{$hair}', '{$age}', '{$gender}', '{$biography}', '{$uni}', '{$smoker}')";

            $result = mysqli_query($connection, $query);

            if($result) {
                $_SESSION["message"] = "Success, you can now login";
                
            } else {
                $_SESSION["message"] = "Failed";
                redirectto("index.php");
            }
        } else {
            $_SESSION["message"] = "Passwords dont match.";
            redirectTo("index.php");
        }

    }

    redirectTo("index.php");

?>