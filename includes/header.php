<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
    <a href="index.php"><h1 style="font-color:#2864b7">Lifestyle Store</h1></a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<?php
if (isset($_SESSION['email'])) {
    ?>
<li><a href = "cart.php"><h4><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </h4></a></li>
                <li><a href = "settings.php"><h4><span class = "glyphicon glyphicon-user"></span>Settings</h4></a></li>
<li><a href = "logout.php"><h4><span class = "glyphicon glyphicon-login"></span> Logout</h4></a></li>

<?php
} else {
?>
<li><a href="signup.php"><h4><span class="glyphicon glyphicon-user"></span>
            Sign Up</h4></a></li>
<li><a href="login.php"><h4><span class="glyphicon glyphicon-log-in"></span>
            Login</h4></a></li>
<?php
}
?>
</ul>
</div>
</div>
</nav>
