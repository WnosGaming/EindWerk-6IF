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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/screen.css">
    <link rel="shortcut icon" href="img/Favicon.png" type="image/png">
</head>
<body>
    <?php
    include_once("header.php");
    ?> 
    <div class="container">
        <div class="row">
            <h1>Login</h1>
        </div>
        <div class="row">
       
            <section class="row justify-content-center">
            <section class="col-12 col-sm-8 col-md-6">
                <form class="form-container" action="checklogin.php" method="post" autocomplete="off" >
                 
                <div class="form-group">
                        <label for="InputName">Gebruikersnaam</label>
                        <span class="glyphicon glyphicon-user"></span>
                        <input type="text" name="username" id="username" required>                                    
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Password</label>
                        <span class="glyphicon glyphicon-lock"></span>
                        <input type="text" name="password" id="password" required>                                    
                    </div>
                    <span class="glyphicon glyphicon-user"></span><input class="btn btn-primary"  type="submit" value="SUBMIT" alt='person'>
                    <div class="form-footer">
                        <p>Heb je nog geen account?<a href="signupForm.php">Sign Up</a></p>
                        <?php 
                        if (isset($_GET["melding"])){ $melding=$_GET["melding"];}?>
                        <p id="fout"><?php if (isset($_GET["melding"])){print $melding;}?></p>
                    </div>
                    
                </form>
        </div>
    </div>

    <img src="img/login.png" alt="" style="background-color: white; display: block; margin: 0 auto; height: 150px;">
    
    

</body>
</html>