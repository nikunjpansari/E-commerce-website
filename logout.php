<?php
session_start();
if(!isset($session['email']))
{
    header('location:index.php');
    exit;
}
session_unset();
session_destroy();
header('location:');
?>
