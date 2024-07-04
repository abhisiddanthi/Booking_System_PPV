<?php
session_start();
$_SESSION["villa_no"]=$_POST['villano'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Games</title>
    <link href="homepage.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="fade">
<form action="booking.php">
    <div class="header1" align="center">
        <ul style="margin-top:0;margin-left:0;margin-right:0;">
            <li><h1 class="ppv">PPV</h1></li>
            <li><h1 class="text" style="clear:right;">Sports Arena Time Schedule</h1></li>
        </ul>
    </div>
    <div class="row" align="center">
        <div class="column">
            <div class="container">
                <a href="Courts/basketballcourt.php"><img src="images/Basketball.jpeg" class="images">
                <h1 class="items">Basketball</h1></a>
            </div>
        </div>
        <div class="column">
            <div class="container">
               <a href ="Courts/throwballcourt.php"><img src="images/net.jpeg" class="images">
                <h1 class="items">Throwball</h1></a>
            </div>
        </div>
        <div class="column">
            <div class="container">
                 <a href ="Courts/footballcourt.php"><img src="images/Football.jpeg" class="images">
                <h1 class="items">Football</h1></a>
            </div>
        </div>
        <div class="column1">
            <div class="container">
                 <a href ="Courts/volleyballcourt.php"><img src="images/Volleyball.jpeg" class="images">
                <h1 class="items">Volleyball</h1></a>
            </div>
        </div>
    </div>
    <div class="row" align="center">
        <div class="column2">
            <div class="container">
                <a href ="Courts/volleyballcourt.php"> <img src="images/Volleyball.jpeg" class="images2">
                <h1 class="items">Volleyball</h1></a>
            </div>
        </div>
        <div class="column2" align="center" style="display:block">
            <div class="container">
                 <a href ="Courts/cricketcourt.php"><img src="images/Cricket.jpeg" class="images2">
                <h1 class="items">Cricket</h1></a>
            </div>
        </div>
    </div>
	</form>
</body>
</html>
