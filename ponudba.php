<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<?php
	session_start();
	include ("connect.php");
	$vpisna = $_SESSION['vpisna'];
	$predmet = mysql_real_escape_string($_POST['predmet']);
	$dan = mysql_real_escape_string($_POST['dan']);
	$cas = mysql_real_escape_string($_POST['cas']);

	if($predmet && $dan && $cas)
	{
		$query = mysql_query("SELECT iduser FROM user WHERE vpisnaSt='$vpisna'");
		$query = mysql_fetch_assoc($query);
		$idUser = $query['iduser'];
		
		$query = mysql_query("SELECT idvaje FROM vaje WHERE predmet='$predmet' AND dan='$dan' AND cas='$cas'");
		$query = mysql_fetch_assoc($query);
		$idVaje = $query['idvaje'];
		
		$query = mysql_query("INSERT INTO ponudba (user_iduser, vaje_idvaje) VALUES ('$idUser', '$idVaje')");
	}

?>