<?php

if(isset($_POST['submitted'])){
	setcookie('font_size',$_POST['font_size']);
	setcookie('font_color',$_POST['font_color']);
	
	$msg= '<p>Your seeting have been entered! Click <a href="cookies2.php">here</a> to see them in action.</p>';
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8/">
	<title>Customize your setting</title>
</head>
<body>
<?php 
if(isset($msg)){
	print $msg;
}
?>

<p>Use this form to set your preferences:</p>
<form action="cookies.php" method="post">
<select name="font_size">
	<option value="">Font Size</option>
	<option value="xx-small">xx-small</option>
	<option value="x-small">x-small</option>
	<option value="small">small</option>
	<option value="medium">medium</option>
	<option value="large">large</option>
	<option value="x-large">x-large</option>
	<option value="xx-large">xx-large</option>
</select>
<select name="font_color">
	<option value="">Font Color</option>
	<option value="999">Gray</option>
	<option value="0c0">Green</option>
	<option value="00f">Blue</option>
	<option value="c00">Red</option>
	<option value="000">Black</option>
</select>
<input type="submit" name="submit" value="Set My Preferences"/>
<input type="hidden" name="submitted" value="true"/>
</body>
</html>