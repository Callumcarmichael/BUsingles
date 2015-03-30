<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs"></p>
          <div class="jumbotron">
        <h1>Find a match ... <div id="bigredheart">&hearts;</div></h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            </div>
        </div><!--/.container-->
    </div>
</div>

<div class="container">
<div class="jumbotron" style="text-align:center" ><h3>Filter by...</h3></div>
</div>

<div class="container">
        <div class="jumbotron">
            <form name="search" method="post" action="match.php">
                <p>Hair colour:</p>
                <select name="hair">
                    <option value="">Select...</option>
                    <option value="Brown">Brown</option>
                    <option value="Ginger">Ginger</option>
                    <option value="Blonde">Blonde</option>
                    <option value="Black">Black</option>
                </select>
                <p>Male or Female?
                <select name="gender">
                    <option value="">Select...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option></select></p><br>
                <p>Age:
                <select name="age">
                    <option value="">Select...</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option></select></p><br>
                 
                <p>University Course
                    <select name="uni">
                    <option value="">Select...</option>
                    <option value="Digital Media Design">Digital Media Design BA (Hons)</option>   
                    <option value="Advertising BA (Hons)">Advertising BA (Hons)</option>
                    <option value="Computer Animation Arts BA (Hons)">Computer Animation Arts BA                    (Hons)</option>
                    <option value="History BA (Hons)">History BA (Hons)</option>
                    </select></p><br>
                <p>Smoker
                <select required name="smoker">
                <option value="">Select...</option>
                <option value="No">No</option>   
                <option value="Light">Light</option>
                <option value="Moderate">Moderate</option>
                <option value="Heavy">Heavy</option>
                </select></p><br>
            <p>Drinker
                <select required name="drinker">
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
                
                 <input type="submit" name="search" value="Search" />
            </form>
    
    <?php
    if(isset($_POST["search"])){
        
        if(!empty($_POST["hair"]) && !empty($_POST["gender"])) {
            $hair = $_POST["hair"];
            $gender = $_POST["gender"];
            $age = $_POST["age"];
            $uni = $_POST["uni"];

            $query = "SELECT * FROM users WHERE hair='{$hair}' AND gender='{$gender}'AND age='{$age}'AND uni='{$uni}'";

            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_array($result)){

            echo $row["firstname"];

            }
        }
        
        
    }
        

    
            
    ?>
            
    
            
            
           
        
    </div><!--/.jumbotron-->
</div><!--/.container-->


</body>
   
    
    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="offcanvas.js"></script>
  
   
   
</body>
         
</html>