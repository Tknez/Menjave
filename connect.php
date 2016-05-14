<?php
	ini_set('display_errors', '1');
	error_reporting(E_ALL);

	$povezava = mysql_connect('sql8.freemysqlhosting.net', 'sql8119517', 'EYeAEP83Ds');
	if(!$povezava)
	{
		die('Not connected' . mysql_error());
	}
	else {
		echo "Connection established!";
	}
	mysql_select_db("sql8119517");
?>