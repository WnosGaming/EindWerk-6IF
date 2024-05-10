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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/HomePage.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  -->
    <link rel="shortcut icon" href="img/Favicon.png" type="image/png">  

    


	
	

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
        include_once("header.php");
    ?>        
    <div class="container">
        <div class="row">
            <h1>Sign Up</h1>
        </div>
        
        <div class="row">
            <section class="container-fluid">
          
            <section class="row justify-content-center">
            <section class="col-12 col-sm-8 col-md-6">
                <form class="form-container" action="signup.php" method="post" autocomplete="off" >                  
                             
                    <div class="form-group">
                        <label for="InputName">Gebruikersnaam</label>
                        <span class="glyphicon glyphicon-user"></span>
                        <input type="text" name="username" id="username" required>                                    
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Password</label>
                        <span class="glyphicon glyphicon-lock"></span>
                        <input type="text" name="password1" id="password1" required>                                    
                    </div>
                    <div class="form-group">
                        <label for="InputPassword2">Password (herhaal)</label>
                        <span class="glyphicon glyphicon-lock"></span>
                        <input type="text" name="password2" id="password2" required>
                                    
                    </div>
                    <div class="form-group">
                     <span class="glyphicon glyphicon-user"></span><input class="btn btn-primary" type="submit" value="SUBMIT" alt='person'>
                    </div>
                    <div class="form-footer">
                        <p> Heb je al een account? <a href="login.php">Login</a></p>
                    </div>
                    <?php 
                    if (isset($_GET["melding"])){ $melding=$_GET["melding"];}?>
                    <p id="fout"><?php if (isset($_GET["melding"])){print $melding;}?></p>
                </form>
         </div>
    </div>
    
    </body>

    <img src="img/add-user.png" alt="" style="background-color: white; display: block; margin: 0 auto; height: 150px;">
</html>