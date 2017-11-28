<?php

define('TITLE','Register');
require('header.html');

print '<h1>Registration Form</h1>
<p>Register so that you can take advantage of certain features like this, that, and the other thing.</p>';
print '<style type="text/css" media="screen">error{color:red;}</style>';

if(isset($_POST['submitted'])){
	$problem=FALSE;
	
	if(empty($_POST['first_name'])){
		$problem=TRUE;
		print '<p class="error">Please enter your first name!</p>';
	}
	if(empty($_POST['last_name'])){
		$problem=TRUE;
		print '<p class="error">Please enter your last name!</p>';
	}
	if(empty($_POST['email'])){
		$problem=TRUE;
		print '<p class="error">Please enter your e-mail!</p>';
	}
	if(empty($_POST['password1'])){
		$problem=TRUE;
		print '<p class="error">Please enter your password!</p>';
	}
	if($_POST['password1']!=$_POST['password2']){
		$problem=TRUE;
		print '<p class="error">Your password did not match your comfirm password!</p>';
	}
	if(!$problem){
		print '<p>You are now registered!<br/>Okay, you are not really registered but...</p>';
		$_POST=array();
	}
	else{
		print '<p class="error">Please try again!</p>';
	}
}
?>

<form action="register.php" method="post">
	<p>First Name:<input type="text" name="first_name" size="20" value="<?php if(isset($_POST
	['first_name'])){print htmlspecialchars($_POST['first_name']); }?>"/></p>
	<p>Last Name:<input type="text" name="last_name" size="20" value="<?php if(isset($_POST
	['last_name'])){print htmlspecialchars($_POST['last_name']); }?>"/></p>
	<p>E-mail:<input type="text" name="email" size="20" value="<?php if(isset($_POST
	['email'])){print htmlspecialchars($_POST['email']); }?>"/></p>
	<p>Password:<input type="password" name="password1" size="20"/></p>
	<p>Comfirm Password:<input type="password" name="password2" size="20"/></p>
	<p><input type="submit" name="submit" value="Register!"/></p>
	<input type="hidden" name="submitted" value="true"/>
</form>

<?php
	require('Footer.html');
?>