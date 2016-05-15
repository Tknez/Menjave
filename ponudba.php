<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<?php
	session_start();
	include ("connect.php");
	$predmet = mysql_real_escape_string($_POST['predmet']);
	$dan = mysql_real_escape_string($_POST['dan']);
	$ura = mysql_real_escape_string($_POST['ura']);

	if($u && $v)
	{
		$query = mysql_query("INSERT INTO ponudba (user_iduser, vaje_idvaje) SELECT idvaje FROM vaje WHERE predmet = '$predmet' AND dan = '$dan' AND ura = '$ura'");
		$stVrstic = mysql_num_rows($query);
		if($stVrstic != 0)
		{
			header('Location: index.html');
		}
		else
		{
			header('Location: index.html');
		}
		
	}
	else
	{
		header('Location: login.html');
	}
	
?>