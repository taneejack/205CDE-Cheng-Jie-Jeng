<?php
	define('TITLE','login');
	require('header.html');
	print '<h1>Login Form</h1>
	<p>Users who are logged in can take advantage of certain feature like this, that, and the other things</p>';
	
	if (isset($_POST['submitted'])){
		if((!empty($_POST['email']))&&(!empty($_POST['password']))){
			if((strtolower($_POST['email'])=='me@example.com')&&($_POST['password']=='testpass')){
				session_start();
				$_SESSION['email']=$_POST['email'];
				$_SESSION['loggedin']=time();
				
				header('Location:welcome.php');
				exit();
		}
		}
		else{
			print '<p>Please make sure you enter both an email address and a password!<br/>
			Go back and try again.</p>';
		}
	}
	else{
		print '<form action="login.php" method="post">
		<p>Email Address: <input type="text" name="email" size="20"/></p>
		<p>Password: <input type="password" name="password" size="20"/></p>
		<p><input type="submit" name="submit" value="Log In!"/></p>
		<input type="hidden" name="submitted" value="true"/>
		</form>';
	}
	require('Footer.html');
?>