<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<?php
	include ("connect.php");
	$id = $_GET['id'];
	if(isset($_GET['id']))
	{
		mysql_query("DELETE FROM ponudba WHERE idponudba='$id'");
		
		header('Location: nadzorna.php');

	}
	else {
		header('Location: nadzorna');
	}

?>