<div class="container-fluid" style="background-color: black;">
<div class="container-fluid" style="height: auto;">

    <a class="navbar-brand" href="#top">
				<svg xmlns="http://www.w3.org/2000/svg" width="80" height="30" viewBox="154.12 89.5 301.086 613"><path fill="white" stroke="black" stroke-miterlimit="10" d="M154.163 190.001v413.957s-6.67 99.021 146.207 95.655c0 0 137.517 16.585 154.837-92.351V344.164s-10.649-53.795-104.347-53.795c0 0-64.443-1.346-67.748 19.278l-.673-103.673s20.625-23.256 47.185.673l-.673 61.812h126.256v-78.458S454.9 85.043 306.552 90.979c-.063 0-141.067-11.934-152.389 99.022z"/><path stroke="#000" stroke-miterlimit="10" d="M253.185 433.883v190.026h-3.856v10.22h10.098v3.733h30.294v-4.161h4.039v-98.839s10.955-14.382 36.292-11.199v-51.652s22.032-11.322 62.853-11.322v-47.247s-15.178-21.603-50.429 2.51c0 0-40.27 22.032-48.777-2.693h-33.231v3.305h-7.466v6.978h-3.611v7.711h3.672l.122 2.63z"/><path fill="#FFF" stroke="#000" stroke-miterlimit="10" d="M296.942 490.432v29.07h29.682v-40.27l-4.161-7.283h-6.854l.184 6.854s7.038 1.224 7.895 5.63l-2.631 2.51c.059-.061-7.53-11.444-24.115 3.489z"/></svg>
				</a>
    <ul class="nav navbar-nav navbar-left">
        <li><a href="EindWerk.html">R6 Shop</a></li>
            <li><a href="Aanvallers.html">Aanvallers</a></li>
            <li><a href="Verdedigers.html">Verdedigersnk</a></li>
        </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href=""><?php if ($user!='Login') print 'Welkom '.$user;?></a></li>
        <?php if ($user=='Login') print '<li><a href="signupForm.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';?>
        <?php if ($user=='Login') print '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';?>
        <li><a href="logout.php"><?php if ($user!='Login') print 'Logout';?></a></li>
    </ul>
</div>
</div>

</nav>