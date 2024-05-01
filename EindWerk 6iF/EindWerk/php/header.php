
<div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
        <li><a href=""><?php if ($user!='Login') print 'Welkom '.$user;?></a></li>
        <?php if ($user=='Login') print '<li><a href="signupForm.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';?>
        <?php if ($user=='Login') print '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';?>
        <li><a href="logout.php"><?php if ($user!='Login') print 'Logout';?></a></li>
    </ul>
</div>
</nav>