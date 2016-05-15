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
    
    
    <section id="intro">
        <div class="container text-center">
            <div class="row" id="naslovCenter">

                <h1 id="nameHeader"><b>FRI</b>menjava</h1>
                <hr>
                <h2 id="nameHeader2">Menjava urnikov - lahka kot še nikoli!</h2>
                <h3 style="color:white; text-shadow:1px 1px black;"></h3>
            </div>
            <div class="row">
                <a class="iconWhite shadow" href='<?php echo 'https://urnik.fri.uni-lj.si/timetable/2015_2016_letni/allocations?student=' . $Vpisna?>'><i class="fa fa-clock-o shadow" aria-hidden="true"></i></a>
                </div>
            <div class="row" id="arrowIcon">
                <a class="iconWhite page-scroll shadow"><i class="fa fa-arrow-down animated infinite bounce shadow" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

<section style="background-color: #E9E9E9;">    
        <div class="container text-center">
            <div class="row dodajZamenjavo">
                <div class="col-lg-12 form">
                    <h2 style="color:black; margin-bottom:40px;">Dodaj novo zamenjavo!</h2>

                    <form class="loginForm" action="ponudba.php" method="post">
                        <input type="text" name="predmet" placeholder="predmet" class="inputBeautify"/>
                        <input type="text" name="dan" placeholder="dan" class="inputBeautify"/>
                        <input type="mail" name="cas" placeholder="ura" class="inputBeautify"/>
                        <button type="submit" class="btn btn-primary" id="oddajZamenjavo" style="position: relative;top: -1px;">Dodaj!</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="container text-center">
            <h3 style="color:black;">Filter:</h3>
            <form>
                <input type="submit" name="btn" class="btn btn-primary" id="ors" value="ORS">
                <input type="submit" name="btn" class="btn btn-primary" id="ois" value="OIS">
                <input type="submit" name="btn" class="btn btn-primary" id="aps2" value="APS2">
                <input type="submit" name="btn" class="btn btn-primary" id="tis" value="TIS">
                <input type="submit" name="btn" class="btn btn-primary" id="vis" value="VIS">
            </form>
        </div>
        
        <div class="container">
            <div class='row' id='seznam'>
                <div class="col-lg-6">
                <h3 style="color:black;">Tekoče zamenjave:</h3>
                </div>
                <div class="col-lg-6 text-right">
                <input type="submit" name="btn" class="btn btn-primary" value="Uredi moje objave" id="nadzornaButton" onclick="window.location='/nadzorna.php';" style="position: relative; top: -6px;"></input>
                </div>
                <div class='col-lg-12'>
                        <?php
                        if(isset($_GET['btn']))
                            $nizP = "SELECT * FROM vaje, user, ponudba WHERE ponudba.user_iduser = user.iduser AND ponudba.vaje_idvaje = vaje.idvaje AND vaje.predmet='" . $_GET['btn'] . "'";
                        else 
                            $nizP = "SELECT * FROM vaje, user, ponudba WHERE ponudba.user_iduser = user.iduser AND ponudba.vaje_idvaje = vaje.idvaje";
        				
        				$ponudbaQ = mysql_query($nizP);
        				
        				while($ponudba = mysql_fetch_assoc($ponudbaQ))
        				{

        				    
                                echo "<div class='ponudbaSingle' id='" . $ponudba[idponudba] . "'>";
            				    echo "<div class='col-sm-4'>";
            				    echo "<p class='bold'>" . $ponudba['ime'] . "</p>";
            				    echo "</div>";
            				    echo "<div class='col-sm-4'>";
            				    echo "<p>Ponujam: " . $ponudba['predmet'] . " " . $ponudba['dan'] . " " . $ponudba['cas'] . "</p>";
            				    echo "</div>";
            				    echo "<div class='col-sm-4'>";
            				    echo "<a class='iconWhite envelopez' href='mailto:" . $ponudba['email'] . "'><i class='fa fa-envelope-o' aria-hidden='true'></i></a>";
            				    echo "</div>";
            				    echo "</div>";
        				    }
                    ?>
                </div>
            </div>
        </div>
    </section>
                    

    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/index.js"></script>
</body>