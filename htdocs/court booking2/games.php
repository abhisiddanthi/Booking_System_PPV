<?php
session_start();
$_SESSION['villa_no']=$_POST['villano'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Games</title>
    <link href="stylesheet/homepage.css" type="text/css" rel="stylesheet">
	<link href="stylesheet/homepage2.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="fade">
    <div class="header1" align="center">
        <ul style="margin-top:0;margin-left:0;margin-right:0;">
            <li><h1 class="ppv">PPV</h1></li>
            <li><h1 class="text" style="clear:right;">Sports Arena Time Schedule</h1></li>
        </ul>
    </div>
	<form action="court.php" method="post">
	<div class="row" align="center">
		<h1 class="myfont">! Note that the default sport chosen is <strong style="font-size:2vw;">BASKETBALL</strong> !</h1>
		<h1 style="font-family:helvetica;font-size:2vw">Choose your sport and</h1><input class="button" style="width:10%;font-size:2vw;margin-left:1%;" type="submit" name="Go" value="Go">
	</div>
    <div class="row" align="center">
        <div class="column">
		<input type="radio" value="Basketball" id="Basketball" name="sport" checked>
            <label for="Basketball">
			<div class="container">
               <img src="images/Basketball.jpeg" class="images">
                <h1 class="items">Basketball</h1>
            </div>
			</label>
        </div>
        <div class="column">
		<input type="radio" value="Throwball" id="Throwball" name="sport">
		<label for="Throwball">
            <div class="container">
               <img src="images/net.jpeg" class="images">
                <h1 class="items">Throwball</h1>
            </div>
        </div>
		</label>
        <div class="column">
		<input type="radio" value="Football" id="Football" name="sport">
		<label for="Football">
            <div class="container">
                 <img src="images/Football.jpeg" class="images">
                <h1 class="items">Football</h1>
            </div>
		</label>
        </div>
        <div class="column1">
		<input type="radio" value="Volleyball" id="Volleyball1" name="sport">
		<label for="Volleyball1">
            <div class="container">
                 <img src="images/Volleyball.jpeg" class="images">
                <h1 class="items">Volleyball</h1></a>
            </div>
		</label>
        </div>
    </div>
    <div class="row" align="center">
        <div class="column2">
		<input type="radio" value="Volleyball" id="Volleyball" name="sport">
		<label for="Volleyball">
            <div class="container">
                <img src="images/Volleyball.jpeg" class="images2">
                <h1 class="items">Volleyball</h1>
            </div>
		</label>
        </div>
        <div class="column2" align="center" style="display:block">
		<input type="radio" value="Cricket" id="Cricket" name="sport">
		<label for="Cricket">
            <div class="container">
                <img src="images/Cricket.jpeg" class="images2">
                <h1 class="items">Cricket</h1>
            </div>
		</label>
        </div>
    </div>
	</form>
	<?php
		error_reporting(0);
		$_SESSION['sport']=$_POST['sport'];
	?>
</body>
</html>
