
<?php
$user="Login";
session_start();
if (isset($_SESSION["user"]))
{
   $user=$_SESSION["user"];
}
?>
<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>R6 Signup</title>
    <link rel="shortcut icon" href="img/Favicon.png" type="image/png">  
</head>
<body>
    
    <?php
        include_once("navbar.php");
    ?>       
    <br><br><br><br> 
    
        <div class="row">
            <h1 style="text-align: center;">Sign Up</h1>
        </div>
    <!-- <div class="container">     -->
    <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <form class="form-container form-inline" action="signup.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="InputName">Gebruikersnaam</label>
                <span class="glyphicon glyphicon-user"></span>
                <input type="text" name="username" id="username" class="form-control" required>                                    
            </div>
            <div class="form-group">
                <label for="InputPassword1">Password</label>
                <span class="glyphicon glyphicon-lock"></span>
                <input type="text" name="password1" id="password1" class="form-control" required>                                    
            </div>
            <div class="form-group">
                <label for="InputPassword2">Password (herhaal)</label>
                <span class="glyphicon glyphicon-lock"></span>
                <input type="text" name="password2" id="password2" class="form-control" required>                                    
            </div>
            <div class="form-group">
                <span class="glyphicon glyphicon-user"></span>
                <br>
                <input class="btn btn-primary" type="submit" value="SUBMIT" alt="person">
            </div>
            <div class="form-footer">
                <p>Heb je al een account? <a href="login.php">Login</a></p>
            </div>
            <?php if (isset($_GET["melding"])) { $melding=$_GET["melding"];}?>
            <p id="fout"><?php if (isset($_GET["melding"])) { print $melding;}?></p>
        </form>
    </div>
</div>

    
    

    <img src="img/add-user.png" alt="" style="background-color: white; display: block; margin: 0 auto; height: 150px;">
    <br>
    <?php
        include("footer.php");
    ?> 
</body>     
</html>
 