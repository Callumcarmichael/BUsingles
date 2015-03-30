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
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $uni = $_POST["uni"];
        $biography = $_POST["biography"];
        $smoker = $_POST["smoker"];
        $hair = $_POST["hair"];
        $drinker = $_POST["drinker"];
        $height = $_POST["height"];
        $eyecolour = $_POST["eyecolour"];
        
        
    if(strcmp($password1, $password2) == 0) {
            
            $query = "INSERT INTO users (username, password, firstname, lastname,age, gender, uni, biography, smoker, hair, drinker, height, eyecolour) VALUES ('{$username}', '{$password1}', '{$firstname}', '{$lastname}', '{$age}', '{$gender}', '{$uni}', '{$biography}', '{$smoker}', '{$hair}', '{$drinker}', '{$height}', '{$eyecolour}')";

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