<?php
session_start();
error_reporting(0);
$_SESSION["sport"]=$_POST['sport'];
$sport=$_POST['sport'];
?>
<!doctype html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking</title>
        <link href="stylesheet/homepage.css" type="text/css" rel="stylesheet">
		<link href="stylesheet/homepage2.css" type="text/css" rel="stylesheet">
    </head>
    <body class="fade">
        <div class="header1" align="center">
            <ul style="margin-top:0;margin-left:0;margin-right:0;">
                <li><h1 class="ppv">PPV</h1></li>
                <li><h1 class="text" style="clear:right;">Sports Arena Time Schedule</h1></li>
            </ul>
        </div>
        <div class="row" align="center">
		<ul align="center">
                <li style="float:left; display:inline-block; width:20%;background-color:white;font-family:helvetica; padding:15px;border-radius:18px;"><h1 style="font-size:1.5vw;"><?php echo date("l d/m/y") ?></h1></li>
				<li style="display:inline-block; width:35%;background-color:white;font-family:helvetica; padding:15px;border-radius:18px;"><h1 style="font-size:1.5vw;">Choose a time slot</h1></li>
                <li style="float:right;  display:inline-block; width:15%;background-color:white;font-family:helvetica; padding:15px;border-radius:18px;"><h1 style="font-size:1.5vw;"><?php echo "Villa number: ". $_SESSION["villa_no"]  ?></h1></li>
            </ul>
        </div>
		<?php
				if(isset($_GET['error'])){
					if ($_GET['error'] == "you_have_already_booked"){
						echo '<p style="font-family:helvetica;font-size:2vw;text-align:center;color:#ff3333;">You have already booked once and can not do it once again!</p>';
					}
					elseif($_GET['error'] == "already_booked"){
						echo '<p style="font-family:helvetica;font-size:2vw;text-align:center;color:#ff3333;">This is already taken by a user.</h1></p>';
					}
					elseif($_GET['error'] == "cancel"){
						echo '<p style="font-family:helvetica;font-size:2vw;text-align:center;color:#808000;">You have successfully canceled your reservation.</h1></p>';
					}
					elseif($_GET['error'] == "mysqlifailure"){
						echo '<p style="font-family:helvetica;font-size:2vw;text-align:center;color:#ff3333;">RELOAD THE PAGE!!!</h1></p>';
					}
				}
				elseif (isset($_GET['bookingsuccess'])){
					echo '<p style="font-family:helvetica;font-size:2vw;text-align:center;color:green; font-weight:bold;">The time slot has been successfully booked by you. Enjoy playing!</p>';
				}
		?>
        <div class="display">
		<input type="hidden" name="username" value="<?php echo $_SESSION["villa_no"];?>"/>
        <div class="row" align="center" style="font-family:helvetica;">
		   <div class="column3">
				<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time1=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time1" align="center" name="submit" id="submit">6am-7am<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time1" align="center" name="submit" id="submit">6am-7am<br><br>Apply</button></form>';
							}
						}
				?>
			</div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time2=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time2" align="center" name="submit" id="submit">7am-8am<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time2" align="center" name="submit" id="submit">7am-8am<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">              
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time3=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time3" align="center" name="submit" id="submit">8am-9am<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time3" align="center" name="submit" id="submit">8am-9am<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time4=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time4" align="center" name="submit" id="submit">9am-10am<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time4" align="center" name="submit" id="submit">9am-10am<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
        </div>
        <div class="row" align="center">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time5=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time5" align="center" name="submit" id="submit">10am-11am<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time5" align="center" name="submit" id="submit">10am-11am<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
			<div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time6=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time6" align="center" name="submit" id="submit">11am-12pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time6" align="center" name="submit" id="submit">11am-12pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time7=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time7" align="center" name="submit" id="submit">12pm-1pm<br><br>Cancel</button></form>';
					}
					else{
						$first=1;
						$sql="SELECT * FROM booking WHERE time7=$first";
						$result=mysqli_query($conn,$sql);
						$resultCheck= mysqli_num_rows($result);
							if($resultCheck>0){
								while($row = mysqli_fetch_assoc($result)){
									echo '<button class="button" style="background-color:#ff3333;color:black;">12pm-1pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
								}
							}
							else {
								echo '<form method="post" action="includes/check.php"><button class="button" value="time7" align="center" name="submit" id="submit">12pm-1pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time8=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time8" align="center" name="submit" id="submit">1pm-2pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time8" align="center" name="submit" id="submit">1pm-2pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
        </div>
        <div class="row" align="center">
		     <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time9=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time9" align="center" name="submit" id="submit">2pm-3pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time9" align="center" name="submit" id="submit">2pm-3pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time10=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time10" align="center" name="submit" id="submit">3pm-4pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time10" align="center" name="submit" id="submit">3pm-4pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time11=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time11" align="center" name="submit" id="submit">4pm-5pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time11" align="center" name="submit" id="submit">4pm-5pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time12=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time12" align="center" name="submit" id="submit">5pm-6pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time12" align="center" name="submit" id="submit">5pm-6pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
		</div>
		<div class="row" align="center">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time13=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time13" align="center" name="submit" id="submit">6pm-7pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time13" align="center" name="submit" id="submit">6pm-7pm<br><br>Apply</button></form>';
							}
						}
			?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time14=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time14" align="center" name="submit" id="submit">7pm-8pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time14" align="center" name="submit" id="submit">7pm-8pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
		    <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time15=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time15" align="center" name="submit" id="submit">8pm-9pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time15" align="center" name="submit" id="submit">8pm-9pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
			<div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time16=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time16" align="center" name="submit" id="submit">9pm-10pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time16" align="center" name="submit" id="submit">9pm-10pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
        </div>
		<div class="row" align="center">
			<div class="column3">
						<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time17=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time17" align="center" name="submit" id="submit">10pm-11pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time17" align="center" name="submit" id="submit">10pm-11pm<br><br>Apply</button></form>';
							}
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
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time1=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time1" align="center" name="submit" id="submit">6am-7am<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time1" align="center" name="submit" id="submit">6am-7am<br><br>Apply</button></form>';
							}
						}
				?>
			</div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time2=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time2" align="center" name="submit" id="submit">7am-8am<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time2" align="center" name="submit" id="submit">7am-8am<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
			</div>
			<div class="row" align="center">
            <div class="column3">              
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time3=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time3" align="center" name="submit" id="submit">8am-9am<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time3" align="center" name="submit" id="submit">8am-9am<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time4=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time4" align="center" name="submit" id="submit">9am-10am<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time4" align="center" name="submit" id="submit">9am-10am<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
        </div>
        <div class="row" align="center">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time5=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time5" align="center" name="submit" id="submit">10am-11am<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time5" align="center" name="submit" id="submit">10am-11am<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
			<div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time6=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time6" align="center" name="submit" id="submit">11am-12pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time6" align="center" name="submit" id="submit">11am-12pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
			</div>
        <div class="row" align="center">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time7=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time7" align="center" name="submit" id="submit">12pm-1pm<br><br>Cancel</button></form>';
					}
					else{
						$first=1;
						$sql="SELECT * FROM booking WHERE time7=$first";
						$result=mysqli_query($conn,$sql);
						$resultCheck= mysqli_num_rows($result);
							if($resultCheck>0){
								while($row = mysqli_fetch_assoc($result)){
									echo '<button class="button" style="background-color:#ff3333;color:black;">12pm-1pm<br><h3 style="font-family:helvetica; color:white; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row["villa_number"];echo'<br><h3 style="font-family:helvetica;color:white; font-size:1.5vw; margin-bottom:2%;">Sport Played:</h3>'.$row['sport'];'</button>';
								}
							}
							else {
								echo '<form method="post" action="includes/check.php"><button class="button" value="time7" align="center" name="submit" id="submit">12pm-1pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time8=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time8" align="center" name="submit" id="submit">1pm-2pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time8" align="center" name="submit" id="submit">1pm-2pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
        </div>
        <div class="row" align="center">
		     <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time9=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time9" align="center" name="submit" id="submit">2pm-3pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time9" align="center" name="submit" id="submit">2pm-3pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time10=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time10" align="center" name="submit" id="submit">3pm-4pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time10" align="center" name="submit" id="submit">3pm-4pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
			</div>
        <div class="row" align="center">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time11=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time11" align="center" name="submit" id="submit">4pm-5pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time11" align="center" name="submit" id="submit">4pm-5pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time12=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time12" align="center" name="submit" id="submit">5pm-6pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time12" align="center" name="submit" id="submit">5pm-6pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
		</div>
		<div class="row" align="center">
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time13=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time13" align="center" name="submit" id="submit">6pm-7pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time13" align="center" name="submit" id="submit">6pm-7pm<br><br>Apply</button></form>';
							}
						}
			?>
            </div>
            <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time14=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time14" align="center" name="submit" id="submit">7pm-8pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time14" align="center" name="submit" id="submit">7pm-8pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
			</div>
        <div class="row" align="center">
		    <div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time15=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time15" align="center" name="submit" id="submit">8pm-9pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time15" align="center" name="submit" id="submit">8pm-9pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
			<div class="column3">
					<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time16=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time16" align="center" name="submit" id="submit">9pm-10pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time16" align="center" name="submit" id="submit">9pm-10pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
        </div>
		<div class="row" align="center">
			<div class="column3">
						<?php
				require'includes/db.inc.php';
					$first=1;
					$villa=$_SESSION['villa_no'];
					$sql="SELECT * FROM booking WHERE time17=$first and villa_number=$villa";
					$result=mysqli_query($conn,$sql);
					$resultCheck= mysqli_num_rows($result);

					if($resultCheck>0){
						echo '<form method="post" action="includes/cancel.php"><button class="button" style="background-color:yellow;" value="time17" align="center" name="submit" id="submit">10pm-11pm<br><br>Cancel</button></form>';
					}
					else{
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
								echo '<form method="post" action="includes/check.php"><button class="button" value="time17" align="center" name="submit" id="submit">10pm-11pm<br><br>Apply</button></form>';
							}
						}
				?>
            </div>
		</div>
        </div>
		</div>
		<div class="row" align="center" style="margin-top:4%;">
				<div style="height:auto; width:100%; float:left; padding:15px;">
						<form action="logout/logout.php"><button style="background-color:red;width:35%;color:white;border:none; padding:15px; border-radius:18px; font-family:helvetica;font-weight:bold; font-size:1.5vw;">Logout</button>
						</form>
				</div>
		</div>
        <script>
        var acc = document.getElementsByClassName("button");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
        panel.style.maxHeight = null;
        }
         else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
        });
        }
        </script>
    </body>
</html>