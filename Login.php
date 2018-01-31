<!DOCTYPE html>
<?php
require ('/includes/common.php');
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<html>
    <head>
        <title>Lifestyle Store|Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="Style.css">
    </head>
    <body>
        <?php
        require ("includes/header.php") ;
        ?>
        <br>
        <br><br>
        <br>
        <br>
        <br>
            <div class="container">
               <div class="row row_style">
                   <div class="col-xs-offset-3 col-xs-6">
                       <div class="panel panel-primary">
                           <div class="panel-heading">
                               <h4 style="color:#337ab7;">nsbvb</h4> 
                           </div>
                           <div class="panel-body">
                               <p class="text-warning" style="font-size:28px">Login to Make a Purchase</p>
                               <br>
                               <form method="POST" action="login_submit.php">
                                        <div class="form-goup">
                                            <h4><label for="Email">Email</label></h4>
                                            <input type="Email" class="form-control" name="Email">
                                        </div>
                                       <br>
                                         <div class="form-goup">
                                            <h4><label for="Password">Password</label></h4>
                                            <input type="Password" class="form-control" name="Password">
                                        </div>
                                       <br>
                                        <center>
                                            <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                        </center>
                                       <?php if (isset($_GET['error'])) {  echo $_GET['error'];}   ?>
                                   </form>
                               <br>
                               <div class="panel-footer">Don't have an account?<a href="Signup.php">Register</a></div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <br>
           <br>
            <br>
            <?php
            include '/includes/footer.php';
            ?>
    </body>
</html>