<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Slab">
	<link rel="icon" type="img/ico" href="favicon.ico">
	    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,500italic,400italic,300italic,100italic,100&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' onload="if(media!='all')media='all'">

</head>

<?php
	session_start();
	session_unset();
?>

<body>
	<div id="logo">
	<font class="bold">FRI</font><font class="thick">menjava</font>
	</div>
	<div id="prijava">
		<form action="log.php" method="post">
			<input type="text" class="ime" name="Ime" placeholder="Ime">
			<br>
			<input type="text" class="ostalo" name="Email" placeholder="email">
			<br>
			<input type="text" class="ostalo" name="Vpisna" placeholder="Vpisna številka">
			<br>
			<input type="submit" id="sub" value="Prijava">
		</form>
	</div>
</body>
</html>