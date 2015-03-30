<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php include_once("../includes/templates/header.php"); ?> 


    <?php

    $userID = $_SESSION["user_id"];
    $query = "SELECT * FROM users WHERE id = '{$userID}' ";
    $result = mysqli_query($connection, $query);
    
    

    ?>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs"></p>
          <div class="jumbotron">
              
            <img id="avatar"src="http://localhost/~tessa/project/public/images/avatar" style="width:450px; height:450px">
              <h1>Hello 
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <?php echo $row["firstname"]; ?></h1>
                
                <p>Username: <?php echo $row["username"]; ?></p>
                <p>First Name: <?php echo $row["firstname"]; ?></p>
                <p>Last Name: <?php echo $row["lastname"]; ?></p>
                <p>Age: <?php echo $row["age"]; ?></p>
                <p>Hair: <?php echo $row["hair"]; ?></p>
                <p>Gender: <?php echo $row["gender"]; ?></p>
                <p>Biography: <?php echo $row["biography"]; ?></p>
                <p>University Course: <?php echo $row["uni"];?></p>
           
            <?php } ?>
              
            
          </div><!--/.jumbotron-->
          </div>
          </div>
        
        
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <?php } ?>

        </div><!--/.container-->
      


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