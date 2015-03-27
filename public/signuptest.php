<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<div class="sign-up-box">
<form action="register2.php" method="post">        
        <p>Select Your Gender:
        <select required name="gender2">
            <option value="">Select...</option>
            <option value="M">Male</option>
            <option value="F">Female</option></select></p><br>
        <p>Select Your Hair Colour:</p>
    <select required name="hair2">
    <option value="">Select...</option>
    <option value="Brown">Brown</option>
    <option value="Ginger">Ginger</option>
    </select>
    
    <input type="submit" name="register2" value="register2" class="btn btn-success" >
</form>
</div>

<?php include_once("../includes/templates/footer.php"); ?>