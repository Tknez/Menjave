<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fri - Menjalnica!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FRI MENJAVE URNIKOV">
    <meta name="author" content="Nick Jokic">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css" type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Megrim' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" onload="if(media!='all')media='all'">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,500italic,400italic,300italic,100italic,100&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css' onload="if(media!='all')media='all'">
</head>

<?php
	include ("connect.php");
	session_start();
	mysql_query("SET NAMES 'utf8'");
	$Vpisna = $_SESSION['vpisna'];
	if(!$Vpisna)
	{
		header('Location: login.php');
	}
?>

<body>
    <section id="intro">

        <div class="container text-center">
            <div class="row">

                <h1 id="nameHeader"><b>FRI</b>menjava</h1>
                <hr>
                <h3 style="color:white; text-shadow:1px 1px black;"></h3>
            </div>
            <div class="row">
                <a class="iconWhite" href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a class="iconWhite" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>


    <section id="ponudbeZamenjav">
        <div class="container">

            <div class="row" id="seznam">
                <div class="col-lg-12">
                    <?php
                        $nizP = "SELECT * FROM vaje, user, ponudba WHERE ponudba.user_iduser = user.iduser AND ponudba.vaje_idvaje = vaje.idvaje";
        				$ponudbaQ = mysql_query($nizP);
        				
        				while($ponudba = mysql_fetch_assoc($ponudbaQ))
        				{
        				    echo "<div class='ponudba'>";
        				    echo $ponudba['predmet'] . " - " . $ponudba['dan'] . " - " . $ponudba['cas'];
        				    echo "</div>";
        				}
                    ?>
                </div>
            </div>
        </div>
    </section>


    <form action="ponudba.php" method="post">
		<input type="text" class="idU" name="idU" placeholder="User">
		<br>
		<input type="text" class="idV" name="idV" placeholder="Vaje">
		<br>
		<input type="submit" id="sub" value="Post">
	</form>
    








    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
</body>