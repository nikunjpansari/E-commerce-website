<?php
include '/includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="Style.css">
    </head>
    <body>
       <?php
       include '/includes/header.php';
       include '/includes/check-if-added.php';
       ?>
        <br>
        <br><br>
        <br>
        <br>
        <div class="container">
            <div class="jumbotron" style="background-color:#fff9e2">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
            </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/camera4540x381.jpg" alt="camera">
                    <div class="caption">
                        <h3>Samsung DSLR</h3>
                        <p>Rs 65,340.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/camera2540x381.jpg" alt="camera">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs. 48,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart !=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/camera1.jpg" alt="camera">
                    <div class="caption">
                        <h3>Kodak Camera</h3>
                        <p>Rs 35,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/camera3540x381.jpg" alt="camera">
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <p>Rs 55,740.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>      
        </div>
            <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Shirt2.jpg" alt="camera">
                    <div class="caption">
                        <h3>Armani Shirt</h3>
                        <p>Rs 10,900.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Shirt3250x250.jpg" alt="camera">
                    <div class="caption">
                        <h3>Levis Shirt</h3>
                        <p>Rs 3,630.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Shirt4250x250.jpg" alt="camera">
                    <div class="caption">
                        <h3>Being Human Shirt</h3>
                        <p>Rs 8,020.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Shirt5250x250.jpg" alt="camera">
                    <div class="caption">
                        <h3>Ed Hardy Shirt</h3>
                        <p>Rs 15,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
            <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Watch9282x306.jpg" alt="camera">
                    <div class="caption">
                        <h3>Titan Watch</h3>
                        <p>Rs 5,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Watch.png" alt="camera">
                    <div class="caption">
                        <h3>Vincero Watch</h3>
                        <p>Rs 25,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Watch3282x306.jpg" alt="camera">
                    <div class="caption">
                        <h3>Rolex Watch</h3>
                        <p>Rs 1,05,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="img/Watch13282x306.jpg" alt="camera">
                    <div class="caption">
                        <h3>Rado Watch</h3>
                        <p>Rs 35,000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> <?php } else { //We have created a function to check whether this particular product is added to cart or not.
                         if (check_if_added_to_cart!=0) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                         
                         } else { ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <footer>
                <center>
                <div class="container">
                    Copyright © Lifestyle Store. All Rights Reserved|  and   |Contact Us: +91 90000 00000
                </div>
                </center>
            </footer>
    </body>
</html>
