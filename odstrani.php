<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<?php

	$ponudba = mysql_real_escape_string($_GET['id']);

	if($ponudba)
	{
		$query = mysql_query("DELETE FROM ponudba WHERE idponudba='$ponudba'");
		$query = mysql_fetch_assoc($query);
		
		header('Location: google');

	}
	else {
		header('Location: nadzorna.php');
	}

?>