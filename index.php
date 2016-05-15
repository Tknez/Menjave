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
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-default navbar-fixed-top " id="custom-bootstrap-menu">
        <div class="container-fluid">
            <div class="navbar-header page-scroll" id="nav-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" id="domovButton">DOMOV</a>
            </div>

            <div class="navbar-right collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav" id="elementeki">
                    <li class="hidden">
                        <a class="page-scroll" href="#domov">a</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#ponudbeZamenjav">ZAMENJAVE</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">NASTAVITVE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<body>
    <section id="intro">

        <div class="container text-center">
            <div class="row" id="naslovCenter">

                <h1 id="nameHeader"><b>FRI</b>menjava</h1>
                <hr>
                <h2 id="nameHeader2">Menjava urnikov - lahka kot še nikoli!</h2>
                <h3 style="color:white; text-shadow:1px 1px black;"></h3>
            </div>
            <div class="row">
                <a class="iconWhite" href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a class="iconWhite" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="row" id="arrowIcon">
                <a class="iconWhite" href="#ponudbeZamenjav"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>


    
        <div class="container text-center">
            <div class="row dodajZamenjavo">
                <div class="col-lg-12 form">
                    <form class="loginForm">
                        <h2>Dodaj novo zamenjavo!</h2>
                        <input type="text" name="predmet" placeholder="predmet" />
                        <input type="text" name="dan" placeholder="dan" />
                        <input type="mail" name="ura" placeholder="ura" />
                        <button type="button" class="btn btn-primary" id="oddajZamenjavo">Dodaj!</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="container">
            
                        <?php
                        $nizP = "SELECT * FROM vaje, user, ponudba WHERE ponudba.user_iduser = user.iduser AND ponudba.vaje_idvaje = vaje.idvaje";
        				$ponudbaQ = mysql_query($nizP);
        				
        				while($ponudba = mysql_fetch_assoc($ponudbaQ))
        				{
        				    echo "<div class='row' id='seznam'>";
                            echo "<div class='col-lg-12'>";
                            echo "<div class='ponudbaSingle'>";
        				    echo "<div class='col-sm-4'>";
        				    echo "<p class='bold'>Ime: " . $ponudba['ime'] . "</p>";
        				    echo "</div>";
        				    echo "<div class='col-sm-4'>";
        				    echo "<p>Ponujam: " . $ponudba['predmet'] . " " . $ponudba['dan'] . " " . $ponudba['cas'] . "</p>";
        				    echo "</div>";
        				    echo "<div class='col-sm-4'>";
        				    echo "<a class='iconWhite' href=" . $ponudba['email'] . "><i class='fa fa-envelope-o' aria-hidden='true'></i></a>";
        				    echo "</div>";
        				    echo "</div>";
        				    echo "</div>";
        				    echo "</div>";
        				}
                    ?>
        </div>
    </section>
                    

    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/index.js"></script>
</body>