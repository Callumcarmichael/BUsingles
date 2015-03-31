<!doctype html>
<html>
    <head>
        <title>BUsingles</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/stylesheet.css" rel="stylesheet"> 
    </head>
    
    <body>
        
    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">

            <?php if(!isset($_SESSION["username"])) { ?>
          
        <div class="login-box">
            <form action="login.php" method="post" class="navbar-form navbar-right">
        <div class="form-group">
            <input required type="text" required name="username" value="" placeholder="Username" class="form-control">
            <input type="password" required name="password" value="" placeholder="Password" class="form-control">
        </div><!--/.form-group-->
            <button type="submit" name ="login" value="Login" class="btn btn-success">Sign in</button>
        <div>     
        <div type="submit" name="sign_up" value="sign_up" class="btn btn-sign_up"><a href="../public/index.php#jumpto">Sign Up</a></div>
        </div> 
            </form>
        </div>      
            <?php } ?>
            
          
        <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
            <li><a href="index.php">BUsingles</a></li>
            <li><a href="about.php">About</a></li>
            
                <?php if (isset($_SESSION["username"])) { ?>
            <li><a href="profile.php">Your Profile</a></li>
            <li><a href="match.php">Find a Match</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php }  ?>
            </ul><!--/.nav navbar-nav-->
            </div><!-- /.nav-collapse -->
          </div><!-- /.container -->
        </nav><!-- /.navbar -->
        
    <?php echo message(); ?>