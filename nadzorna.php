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
    
    
    <section style="background-color: #E9E9E9;">
        <div class="container">
            
                            <h1 style="color:black;">Nadzorna Plošča</h1>

                
            
            
                
            <div class='row' id='seznam'>
                
                <div class="col-lg-6">
            <h3 style="color:black;">Moje zamenjave:</h3>
            </div>
            <div class="col-lg-6 text-right">
                <input type="submit" name="btn" class="btn btn-primary" value="Tekoče objave" id="nadzornaButton" onclick="window.location='/nadzorna.php';></input>
                </div>
                <div class='col-lg-12'>
                        <?php
                        $nizP = "SELECT * FROM vaje, user, ponudba WHERE ponudba.user_iduser = user.iduser AND ponudba.vaje_idvaje = vaje.idvaje";
        				$ponudbaQ = mysql_query($nizP);
        				
        				while($ponudba = mysql_fetch_assoc($ponudbaQ))
        				{
                            echo "<div class='ponudbaSingle'>";
        				    echo "<div class='col-sm-4'>";
        				    echo "<p class='bold'>Ime: " . $ponudba['ime'] . "</p>";
        				    echo "</div>";
        				    echo "<div class='col-sm-4'>";
        				    echo "<p>Ponujam: " . $ponudba['predmet'] . " " . $ponudba['dan'] . " " . $ponudba['cas'] . "</p>";
        				    echo "</div>";
        				    echo "<div class='col-sm-4'>";
        				    echo "<a class='iconWhite crosses' href='mailto:" . $ponudba['email'] . "'><i class='fa fa-times' aria-hidden='true'></i></a>";
        				    echo "</div>";
        				    echo "</div>";
        				}
                    ?>
                </div>
            </div>
        </div>
    </section>
    
</body>