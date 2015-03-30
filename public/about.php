<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<div>
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs"></p>
          <div class="jumbotron">
            <h1>About Us...</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2>Tessa Waldock</h2>
                <img id="img"src="http://localhost/~tessa/project/public/images/Tessa.jpg" style="width:270px; border-radius:20px">
              <p style="font-size:20px">My name is Tessa, I do Digital Media Design at Bournemouth University and am currently learning how to use PHP to connect to a mysql database. This project has proven to be a challenge but I am enjoying it, though I prefer doing the design side of designing a website. I am also interested in gaming and I like long walks on the beach with Callum Carmichael. </p>
              
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Callum Carmichael</h2>
                <img id="img" src="http://localhost/~tessa/project/public/images/ME" style="width:270px; border-radius:20px">
              <p style="font-family:Helvetica Neue; font-size:20px;">My name is Callum Carmichael. I love creating new things from scratch such as graphic posters, visual effects and have a passion for photography. I also now rather enjoy the side of coding because at times I have found it rather frustrating navigating websites and now have the opportunity to create my own. My other hobbies include football, music, DJing and skateboarding. I also try to travel at any opportunity I get. </p>
              
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Michael Horbacki</h2>
                <img id="img" src="http://localhost/~tessa/project/public/images/Michael" style="width:270px; border-radius:20px">
              <p style="font-size:20px">My name is Michael Horbacki. I live in London originally and study digital media design.  I like football and support Liverpool as well as Millwall. I play football every so often but not for a team at the moment. I also like to play rugby. </p>
              
            </div><!--/.col-xs-6.col-lg-4-->
            
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        
      </div><!--/row-->

      


    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="offcanvas.js"></script>
  
    <?php include_once("../includes/templates/footer.php"); ?>