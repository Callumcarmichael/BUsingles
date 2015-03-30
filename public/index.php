<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9">
      <div class="jumbotron">
        <h1>Welcome to BUsingles <div id="bigredheart">&hearts;</div></h1>
        <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
             
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        </div>
        </div><!--/.jumbotron-->  
          
<?php if(!isset($_SESSION["username"])) { ?>      
    <div class="jumbotron">
            <h1><a id="jumpto">Sign Up...</a></h1>
    <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>

            <?php if(isset($_SESSION["username"])) { ?>
            <?php //include_once("../includes/templates/homepage-loggedin.php"); ?>
            <?php } else { ?>
            <?php //include_once("../includes/templates/homepage.php"); ?>
            <?php } ?>
            
    <div class="row">
    <div class="col-md-4">
    <div class="sign-up-box">
<form action="register.php" method="post">
    
        <p>First Name:</p> <input placeholder="Your First Name" type="text" required name="firstname" value=""><br>
           <p>Last Name:</p> <input placeholder="Your Last Name" type="text" required name="lastname" value=""><br>
           <p>Username:</p> <input placeholder="Your Username"type="text" required name="username" value=""><br>
           <p>Password:</p> <input placeholder="Your Password" type="password" required name="password1" value=""><br>
           <p>Retype Password:</p> <input placeholder="Retype Password"type="password" required name="password2" value=""><br>
           
           
           <p>Select Your Age:
                <select required name="age">
                <option value="">Select...</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option></select></p><br>
           <p>Select Your Gender:
                <select required name="gender">
                <option value="">Select...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select></p><br>
           <p>Select Your University Course
                <select required name="uni">
                <option value="">Select...</option>
                <option value="Digital Media Design">Digital Media Design BA (Hons)</option>   
                <option value="Advertising BA (Hons)">Advertising BA (Hons)</option>
                <option value="Computer Animation Arts BA (Hons)">Computer Animation Arts BA (Hons)</option></select></p><br>
        <p>Bio:</p> <textarea name="biography" maxlength="200" placeholder="Enter a short description"></textarea><br>
    </div><!--/.sign-up-box-->
        

    </div><!--/.col-md-4-->
    <div class="col-md-4"></div>
    </div><!--/.row-->
    </div> <!--/.jumbotron-->
        
    <div class="jumbotron">
                <h3>Optional Information</h3>
    <div class="row">
    <div class="col-md-4">
    <div class="sign-up-box">
            <p>Select your hair colour:</p>
                <select required name="hair">
                <option value="">Select...</option>
                <option value="Brown">Brown</option>
                <option value="Ginger">Ginger</option>
                <option value="Ginger">Blonde</option>
                <option value="Ginger">Black</option></select>
           <p>Smoker
                <select name="smoker">
                <option value="">Select...</option>
                <option value="No">No</option>   
                <option value="Light">Light</option>
                <option value="Moderate">Moderate</option>
                <option value="Heavy">Heavy</option>
                </select></p><br>
            <p>Drinker
                <select name="drinker">
                <option value="">Select...</option>
                <option value="None">None</option>   
                <option value="Light">Light</option>   
                <option value="Social">Social</option>
                <option value="Frequent">Frequent</option>
                <option value="Heavy">Heavy</option>
                </select></p><br>
             <p>Height
                <select name="height">
                <option value="">Select...</option>
                <option value="Below 5'">Below 5'</option>   
                <option value="5ft1-5ft4">5ft1-5ft4</option>   
                <option value="5ft5-5ft8">5ft5-5ft8</option>
                <option value="5ft9-6ft">5ft9-6ft</option>
                <option value="6ft1-6ft4">5ft1-5ft4</option>
                <option value="6ft5-6ft8">5ft1-5ft4</option>
                <option value="Above 6ft9">Above 6ft9</option> 
                </select></p><br>
            <p>Eye Colour
                <select name="eyecolour">
                <option value="">Select...</option>
                <option value="Blue">Blue</option>   
                <option value="Green">Green</option>   
                <option value="Brown">Brown</option>
                <option value="Hazel">Hazel</option>
                <option value="Black">Black</option>
                <option value="Other">Other</option>
                </select></p><br>

<input type="submit" name="register" value="register" class="btn btn-success" >
    </div><!--/.sign-up-box-->
        <?php } ?>
    </div><!--/.col-md-4-->
    </div><!--/.row-->
    </div><!--/.jumbotron-->
</form><!--/.register-->
    
    </div><!--/.col-xs-12 col-sm-9-->
    </div><!--/.rows-->
    </div><!--/.container-->
        <?php 

            if(isset($_REQUEST['gender']) && $_REQUEST['gender'] == '0') { 
            echo 'Please select a gender.'; } ?>


        <?php include_once("../includes/templates/footer.php"); ?>