<html>
<head>
<meta http-equiv="content-type" content="text/html charset=utf-8"/>
<title>View Your Setting</title>
<style type="text/css">
body{
	<?php
		if(isset($_COOKIE['font_size'])){
			print "\t\tfont-size:" .htmlentities($_COOKIE['font_size']).";\n";
			
		}else{
			print "\t\tfont-size:medium;\n";
		}
		if(isset($_COOKIE['font_color'])){
			print "\t\tcolor: #" .htmlentities($_COOKIE['font_color']).";\n";
			
		}else{
			print "\t\tcolor:#000;\n";
		}
		?>
}
</style>
</head>
<body>
	<p><a href="cookies.php">Customize Your Setting</a></p>
	<p><a href="cookies3.php">Reset Your Setting</a></p>
	</p>
	yadda yadda yadda yadda yadda 
	yadda yadda yadda yadda yadda
	yadda yadda yadda yadda yadda
	yadda yadda yadda yadda yadda
	</p>
</body>
</html>