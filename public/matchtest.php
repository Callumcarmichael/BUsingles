<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


<body>

<h2>Search</h2>

<form name="search" method="post" action="matchtest.php">
<p>Choose a hair colour:</p>
    <select required name="hair2">
    <option value="">Select...</option>
    <option value="Brown">Brown</option>
    <option value="Ginger">Ginger</option>
    </select>
<p>Are you looking for a Male or Female?
        <select required name="gender2">
            <option value="">Select...</option>
            <option value="M">Male</option>
            <option value="F">Female</option></select></p><br>
<input type="submit" name="search" value="Search" />
    
</form>
    <?php
    if(isset($_POST["hair2"])){
        $query = "SELECT * FROM test WHERE hair2='$_POST[hair2]'";
        $result = mysqli_query($connection, $query);
        while($row = mysqli_fetch_array($result)){
            echo $row["hair2"];
        }
    }
    ?>
    <?php
    if(isset($_POST["gender2"])){
        $query = "SELECT * FROM test WHERE gender2='$_POST[gender2]'";
        $result = mysqli_query($connection, $query);
        while($row = mysqli_fetch_array($result)){
            echo $row["gender2"];
        }
    }
    ?>

</body>