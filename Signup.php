<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Life Style Store</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="Style.css">
    </head>
    <body>
        <?php
        include 'includes/header.php';;
        ?>
        <br>
        <br>
        <br>
        <br>
        <Br>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-4">
                        <center><h2 class="heading"><b>SIGN UP</b></h2></center>
                        
                        <div class="panel-bodyl">
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="Name"  required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="Password" required>
                                <!--pattern=".{6,}" -->
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="Contact" required>                           </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="City" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="Address" required>
                            </div>
                            <center>
                                    <button type="submit" name="submit" class="btn btn-primary button_Submit">Submit</button></center>
                        </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <footer>
                <center>
                <div class="container">
                    Copyright © One Day Shopping. All Rights Reserved|  and   |Contact Us: www.facebook.com
                </div>
                </center>
            </footer>
        
    </body>
</html>