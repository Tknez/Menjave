<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<?php
	session_start();
	include ("connect.php");
	$Ime = mysql_real_escape_string($_POST['Ime']);
	$Email = mysql_real_escape_string($_POST['Email']);
	$Vpisna = mysql_real_escape_string($_POST['Vpisna']);
	
	if($Ime && $Email && $Vpisna)
	{
		$query = mysql_query("SELECT iduser FROM user WHERE ime='$Ime' AND email='$Email' AND vpisnaSt='$Vpisna'");
		$stVrstic = mysql_num_rows($query);
		if($stVrstic != 0)
		{
			$_SESSION['vpisna'] = $Vpisna;
			header('Location: index.php');
		}
		else
		{
			header('Location: login.php');
		}
		
	}
	else
	{
		header('Location: login.php');
	}
	
?>