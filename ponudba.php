<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<?php
	session_start();
	include ("connect.php");
	$u = mysql_real_escape_string($_POST['idU']);
	$v = mysql_real_escape_string($_POST['idV']);

	if($u && $v)
	{
		$query = mysql_query("INSERT INTO ponudba (user_iduser, vaje_idvaje) VALUES ('16', '44')");
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