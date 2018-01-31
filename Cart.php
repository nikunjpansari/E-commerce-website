<?php
include '/includes/common.php';
if(!isset($SESSION['id']))
{
    header('location:login.php');
}
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
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-offset-2 col-xs-2">
                    <h3>Item Number</h3>
                </div>
                <div class="col-xs-2">
                    <h3>Item Name</h3>
                </div>
                <div class="col-xs-2">
                    <h3>Item Price</h3>
                </div>
                <div class="col-xs-2">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-offset-2 col-xs-2" style="border-bottom: 2px solid #9d9d9d;border-collapse: collapse;">
                   
                </div>
                <div class="col-xs-2" style="border-bottom: 2px solid #9d9d9d;border-collapse: collapse;">
                    
                </div>
                <div class="col-xs-2" style="border-bottom: 2px solid #9d9d9d;border-collapse: collapse;">
                    
                </div>
                <div class="col-xs-2" style="border-bottom: 2px solid #9d9d9d;border-collapse: collapse;">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-offset-2 col-xs-2">
                 
                </div>
                <div class="col-xs-2">
                    <h3>Total</h3>
                </div>
                <div class="col-xs-2">
                    <h3>Rs 0</h3>
                </div>
                <div class="col-xs-2">
                    <a href="Success.html">
                    <input type="button" class="btn btn-primary" value="Cofirm Order" style="margin-top:15px">
                    </a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
           <?php
           include '/includes/footer.php';
           ?>
    </body>
</html>
