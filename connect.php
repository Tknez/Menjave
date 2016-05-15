<?php
	//ini_set('display_errors', '1');
	//error_reporting(E_ALL);

	$povezava = mysql_connect('sql8.freemysqlhosting.net', 'sql8119517', 'EYeAEP83Ds');
	if(!$povezava)
	{
		header('Location: login.php');
	}
	mysql_select_db("sql8119517");
?>