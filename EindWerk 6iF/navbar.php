
<?php
include 'connection.php';
include 'sessionCheckUser.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>R6 Aanvallers</title>
    
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/HomePage.css">
		<link rel="stylesheet" href="css/AanvallersEnVerdedigers.css">
        <link rel="shortcut icon" href="img/Favicon.png" type="image/png">
        
    </head>
<body>
	

    <header class="c-header">
		<nav class="navbar fixed-top navbar-expand-lg bg-dark" data-bs-theme="dark">
			<div class="container">
				<a class="navbar-brand" href="#top">
					<svg xmlns="http://www.w3.org/2000/svg" width="80" height="50" viewBox="154.12 89.5 301.086 613"><path fill="#FFF" stroke="#000" stroke-miterlimit="10" d="M154.163 190.001v413.957s-6.67 99.021 146.207 95.655c0 0 137.517 16.585 154.837-92.351V344.164s-10.649-53.795-104.347-53.795c0 0-64.443-1.346-67.748 19.278l-.673-103.673s20.625-23.256 47.185.673l-.673 61.812h126.256v-78.458S454.9 85.043 306.552 90.979c-.063 0-141.067-11.934-152.389 99.022z"/><path stroke="#000" stroke-miterlimit="10" d="M253.185 433.883v190.026h-3.856v10.22h10.098v3.733h30.294v-4.161h4.039v-98.839s10.955-14.382 36.292-11.199v-51.652s22.032-11.322 62.853-11.322v-47.247s-15.178-21.603-50.429 2.51c0 0-40.27 22.032-48.777-2.693h-33.231v3.305h-7.466v6.978h-3.611v7.711h3.672l.122 2.63z"/><path fill="#FFF" stroke="#000" stroke-miterlimit="10" d="M296.942 490.432v29.07h29.682v-40.27l-4.161-7.283h-6.854l.184 6.854s7.038 1.224 7.895 5.63l-2.631 2.51c.059-.061-7.53-11.444-24.115 3.489z"/></svg>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-left mb-2 mb-lg-0 align-items-center">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="Home.php">R6 Shop</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="productenAanvallers.php" >Aanvallers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="productenVerdedigers.php">Verdedigers</a>
					</li>
					<li class="nav-item">
					<?php if ($user=='Admin') print '<li class="nav-item"><a class="nav-link" href="addPageVerdedigers.php">Aanvallers toevoegen</a></li>' ?>
					</li>
					<li class="nav-item">
						<?php if ($user=='Admin') print '<li class="nav-item"><a class="nav-link" href="addPageVerdedigers.php">Verdedigers toevoegen</a></li>' ?>
					</li>
					</ul>
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
						<li class="nav-item">
						<li ><a href="signup.php" style="text-decoration: none;"><?php if ($user!='Login') print '<img src="img/add-user.png" alt="add user" id="voeguser" >Welkom '.$user ; ?></a></li>
        				<?php if ($user=='Login') print '<li><a class="nav-link" href="signupForm.php"><img src="img/add-user.png" alt="add user" id="voeguser" > Sign Up</a></li>';?>
						</li>
						<li class="nav-item">
						<?php if ($user=='Login') print '<li><a class="nav-link" href="login.php" ><img src="img/log-in.png" alt="Log in" id="login"> Login</a></li>';?>
        				<li><a href="logout.php" style="text-decoration: none;"><?php if ($user!='Login') print '<img src="img/log-in.png" alt="Log in" id="login">Logout';?></a></li>
						</li>
						<li class="nav-item">
    					<a id="login" href="winkelmandje.php">
        				<img src="img/2.png" alt="Winkelmandje">
        				
    					</a>
						</li>

					</ul>
					
				</div>
			</div>
		</nav>
	</header>
		
	
    
</body>
</html>