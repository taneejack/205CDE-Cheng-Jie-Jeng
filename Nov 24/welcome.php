<?php
session_start();
define('TITLE','Welcome to the Elliott Smith Fan Club!');
require('header.html');
print '<h1>Welcome to the Elliott Smith Fan Club,'.$_SESSION['email'].'!</h1>';
date_default_timezone_set('Asia/Kuala_Lumpur');
print '<p>You have been logged in since:'.date('g:i a ',$_SESSION['loggedin']).'</p>';
print '<p><a href="logout.php">Click here to logout.</a></p>';
require('Footer.html');
 ?>