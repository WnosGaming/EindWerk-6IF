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
    <title>R6 Login</title>
    
    
</head>
<body>
    
    <?php
    include_once("navbar.php");
    
    ?> 
    <?php
    
    ?>
    <br><br><br><br>
    <div class="row">
            <h1 style="text-align: center;">Log in</h1>
        </div>
    <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-6">
        <form class="form-container form-inline" action="checklogin.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="InputName">Gebruikersnaam</label>
                <span class="glyphicon glyphicon-user"></span>
                <input type="text" name="username" id="username" class="form-control" required>                                    
            </div>
            <div class="form-group">
                <label for="InputPassword1">Password</label>
                <span class="glyphicon glyphicon-lock"></span>
                <input type="text" name="password" id="password" class="form-control" required>                                    
            </div>
            <span class="glyphicon glyphicon-user"></span>
            <br>
            <input class="btn btn-primary" type="submit" value="SUBMIT" alt="person">
            <div class="form-footer">
                <p>Heb je nog geen account? <a href="signupForm.php">Sign Up</a></p>
                <?php if (isset($_GET["melding"])) { $melding=$_GET["melding"];}?>
                <p id="fout"><?php if (isset($_GET["melding"])) { print $melding;}?></p>
            </div>
        </form>
        </div>
        </div>


    <img src="img/log-in.png" alt="" style="background-color: white; display: block; margin: 0 auto; height: 150px;">
    
    <br><br>
    <?php 
    include_once("footer.php");
    ?> 
    <!-- //------------- SQL-Injection -------------- //

    // Methode 1
    $user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['password']);
    // Methode 2
    $user = $conn -> real_escape_string($user);
    $pass = $conn -> real_escape_string($pass);
    // Methode 3
    $sql="SELECT * FROM users WHERE gebruikersnaam = ? AND paswoord = ?";
    $dbConn = $conn->prepare($sql);
    $dbConn->bind_param('ss',$user,$pass); -->

</body>
</html>