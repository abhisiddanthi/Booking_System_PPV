<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPV homepage</title>
    <link href="stylesheet/homepage.css" type="text/css" rel="stylesheet">
	<link href="stylesheet/homepage2.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="header1" align="center">
        <ul style="margin-top:0;margin-left:0;margin-right:0;">
            <li><h1 class="ppv">PPV</h1></li>
            <li><h1 class="text" style="clear:right;">Sports Arena Time Schedule</h1></li>
        </ul>
</div>
        <div class="row" align="center">
		<ul align="center">
                <li style="float:left; display:inline-block; width:20%;background-color:white;font-family:helvetica; padding:15px;border-radius:18px;"><h1 style="font-size:1.5vw;"><?php echo date("l d/m/y") ?></h1></li>
				<li style="display:inline-block; width:35%;background-color:white;font-family:helvetica; padding:15px;border-radius:18px;"><h1 style="font-size:1.5vw;">Check Schedule</h1></li>
				<li style="display:inline-block;float:right;margin-right:5%;width:20%;vertical-align:middle;"><form action="homepage.php"><button style="margin-top:5%;background-color:green;width:100%;color:black;border:none; padding:15px; border-radius:18px; font-family:helvetica;font-weight:bold; font-size:1.5vw;">Login</button></form>
            </ul>
        </div>
<div class="display">
		<input type="hidden" name="username" value="<?php echo $_SESSION["villa_no"];?>"/>
        <div class="row" align="center" style="font-family:helvetica;">
		   <div class="column3">
				<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time1=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">6am-7am<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>'; 
					}
				}
				else {
					echo '<button class="button" value="time1" align="center" name="submit" id="submit">6am-7am<br><br>Applicable</button>';
				}
				?>
			</div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time2=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">7am-8am<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time2" align="center" name="submit" id="submit">7am-8am<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">              
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time3=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">8am-9am<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time3" align="center" name="submit" id="submit">8am-9am<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time4=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">9am-10am<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time4" align="center" name="submit" id="submit">9am-10am<br><br>Applicable</button>';
				}
				?>
            </div>
        </div>
        <div class="row" align="center">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time5=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">10am-11am<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time5" align="center" name="submit" id="submit">10am-11am<br><br>Applicable</button>';
				}
				?>
            </div>
			<div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time6=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">11am-12pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time6" align="center" name="submit" id="submit">11am-12pm<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time7=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">12m-1pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time7" align="center" name="submit" id="submit">12pm-1pm<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time8=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">1pm-2pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time8" align="center" name="submit" id="submit">1pm-2pm<br><br>Applicable</button>';
				}
				?>
            </div>
        </div>
        <div class="row" align="center">
		     <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time9=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">2pm-3pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time9" align="center" name="submit" id="submit">2pm-3pm<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time10=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">3pm-4pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time10" align="center" name="submit" id="submit">3pm-4pm<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time11=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">4pm-5pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time11" align="center" name="submit" id="submit">4pm-5pm<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time12=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">5pm-6pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time12" align="center" name="submit" id="submit">5pm-6pm<br><br>Applicable</button>';
				}
				?>
            </div>
		</div>
		<div class="row" align="center">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time13=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">6pm-7pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time13" align="center" name="submit" id="submit">6pm-7pm<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time14=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">7pm-8pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time14" align="center" name="submit" id="submit">7pm-8pm<br><br>Applicable</button>';
				}
				?>
            </div>
		    <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time15=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">8pm-9pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time15" align="center" name="submit" id="submit">8pm-9pm<br><Br>Applicable</button>';
				}
				?>
            </div>
			<div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time16=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">9pm-10pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time16" align="center" name="submit" id="submit">9pm-10pm<br><br>Applicable</button>';
				}
				?>
            </div>
        </div>
		<div class="row" align="center">
			<div class="column3">
						<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time17=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">10pm-11pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time17" align="center" name="submit" id="submit">10pm-11pm<br><br>Applicable</button>';
				}
				?>
            </div>
		</div>
        </div>
		<div class="nodisplay">
		       <div class="row" align="center" style="font-family:helvetica;">
		   <div class="column3">
				<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time1=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">6am-7am<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>'; 
					}
				}
				else {
					echo '<button class="button" value="time1" align="center" name="submit" id="submit">6am-7am<br><br>Applicable</button>';
				}
				?>
			</div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time2=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">7am-8am<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time2" align="center" name="submit" id="submit">7am-8am<br><br>Applicable</button>';
				}
				?>
            </div>
			</div>
			<div class="row" align="center" style="font-family:helvetica;">
            <div class="column3">              
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time3=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">8am-9am<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time3" align="center" name="submit" id="submit">8am-9am<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time4=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">9am-10am<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time4" align="center" name="submit" id="submit">9am-10am<br><br>Applicable</button>';
				}
				?>
            </div>
        </div>
        <div class="row" align="center">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time5=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">10am-11am<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time5" align="center" name="submit" id="submit">10am-11am<br><br>Applicable</button>';
				}
				?>
            </div>
			<div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time6=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">11am-12pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time6" align="center" name="submit" id="submit">11am-12pm<br><br>Applicable</button>';
				}
				?>
            </div>
			</div>
			<div class="row" align="center" style="font-family:helvetica;">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time7=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">12m-1pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time7" align="center" name="submit" id="submit">12pm-1pm<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time8=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">1pm-2pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time8" align="center" name="submit" id="submit">1pm-2pm<br><br>Applicable</button>';
				}
				?>
            </div>
        </div>
        <div class="row" align="center">
		     <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time9=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">2pm-3pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time9" align="center" name="submit" id="submit">2pm-3pm<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time10=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">3pm-4pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time10" align="center" name="submit" id="submit">3pm-4pm<br><br>Applicable</button>';
				}
				?>
            </div>
			</div>
			<div class="row" align="center" style="font-family:helvetica;">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time11=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">4pm-5pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time11" align="center" name="submit" id="submit">4pm-5pm<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time12=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">5pm-6pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time12" align="center" name="submit" id="submit">5pm-6pm<br><br>Applicable</button>';
				}
				?>
            </div>
		</div>
		<div class="row" align="center">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time13=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">6pm-7pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time13" align="center" name="submit" id="submit">6pm-7pm<br><br>Applicable</button>';
				}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time14=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">7pm-8pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time14" align="center" name="submit" id="submit">7pm-8pm<br><br>Applicable</button>';
				}
				?>
            </div>
			</div>
			<div class="row" align="center" style="font-family:helvetica;">
		    <div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time15=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">8pm-9pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time15" align="center" name="submit" id="submit">8pm-9pm<br><Br>Applicable</button>';
				}
				?>
            </div>
			<div class="column3">
					<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time16=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">9pm-10pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time16" align="center" name="submit" id="submit">9pm-10pm<br><br>Applicable</button>';
				}
				?>
            </div>
        </div>
		<div class="row" align="center">
			<div class="column3">
						<?php
				require'includes/db.inc.php';
				$first=1;
				$sql="SELECT * FROM booking WHERE time17=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);

				if($resultCheck>0){
					while($row = mysqli_fetch_assoc($result)){
						echo '<button class="button" style="background-color:#ff3333;color:black;">9pm-10pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
					}
				}
				else {
					echo '<button class="button" value="time17" align="center" name="submit" id="submit">9pm-10pm<br><br>Applicable</button>';
				}
				?>
            </div>
		</div>
		</div>
</body>
</html>