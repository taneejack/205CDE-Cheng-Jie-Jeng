<?php
	session_start();
	unset($_SESSION);
	session_destroy();
	define('TITLE','Logout');
	require('header.html');
?>
<p>You are now logged out</p>

<?php require('Footer.html');?>