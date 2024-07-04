<?php
session_start();
?>
<!doctype html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking</title>
        <link href="../homepage.css" type="text/css" rel="stylesheet">
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
                <li style="float:left; display:inline-block; width:20%;background-color:white;font-family:helvetica; padding:15px;border-radius:18px;"><h1 style="font-size:1.5vw;"><?php echo date("l (d)/m/y") ?></h1></li>
				<li style="display:inline-block; width:35%;background-color:white;font-family:helvetica; padding:15px;border-radius:18px;"><h1 style="font-size:1.5vw;">Sport: Basketball</h1></li>
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
				}
				elseif (isset($_GET['bookingsuccess'])){
					echo '<p style="font-family:helvetica;font-size:2vw;text-align:center;color:green; font-weight:bold;">The time slot has been successfully booked by you. Enjoy playing!</p>';
				}
		?>
        <div class="display">
		<input type="hidden" name="username" value="<?php echo $_SESSION["villa_no"];?>"/>
        <div class="row" align="center">
		   <div class="column3">
                <button class="button">6am-7am</button>
				<div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time1=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
			</div>
            <div class="column3">
                <button class="button">7am-8am</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time2=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball1.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">8am-9am</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time3=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball2.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">9am-10am</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time4=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball3.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
        </div>
        <div class="row" align="center">
            <div class="column3">
                <button class="button">10am-11am</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time5=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball4.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
			<div class="column3">
                <button class="button">11am-12am</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time6=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball5.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">12am-1pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time7=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball6.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">1pm-2pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time8=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball7.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
        </div>
        <div class="row" align="center">
		     <div class="column3">
                <button class="button">2pm-3pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time9=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball8.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">3pm-4pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time10=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball9.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">4pm-5pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time11=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball10.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">5pm-6pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time12=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball11.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
		</div>
		<div class="row" align="center">
            <div class="column3">
                <button class="button">6pm-7pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time13=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball12.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">7pm-8pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time14=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball13.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
		    <div class="column3">
                <button class="button">8pm-9pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time15=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball14.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
			<div class="column3">
                <button class="button">9pm-10pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time16=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball15.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
        </div>
		<div class="row" align="center">
			<div class="column3">
                <button class="button">10pm-11pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time17=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball16.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
		</div>
        </div>
        <div class="nodisplay">
            <div class="row" align="center">
                 <div class="column3">
                <button class="button">6am-7am</button>
				<div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time1=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
			</div>
            <div class="column3">
                <button class="button">7am-8am</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time2=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball1.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            </div>
            <div class="row" align="center">
                <div class="column3">
                <button class="button">8am-9am</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time3=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball2.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">9am-10am</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time4=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball3.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            </div>
            <div class="row" align="center">
                <div class="column3">
                <button class="button">10am-11am</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time5=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball4.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
			<div class="column3">
                <button class="button">11am-12am</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time6=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball5.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            </div>
            <div class="row" align="center">
                <div class="column3">
                <button class="button">12am-1pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time7=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball6.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">1pm-2pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time8=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball7.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            </div>
            <div class="row" align="center">
                <div class="column3">
                <button class="button">2pm-3pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time9=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball8.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">3pm-4pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time10=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball9.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            </div>
            <div class="row" align="center">
               <div class="column3">
                <button class="button">4pm-5pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time11=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball10.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">5pm-6pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time12=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball11.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            </div>
            <div class="row" align="center">
                <div class="column3">
                <button class="button">6pm-7pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time13=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball12.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            <div class="column3">
                <button class="button">7pm-8pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time14=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball13.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            </div>
			 <div class="row" align="center">
			 <div class="column3">
               <button class="button">8pm-9pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time15=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball14.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
			<div class="column3">
                <button class="button">9pm-10pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time16=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball15.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
				</div>
				 <div class="row" align="center">
                <div class="column3">
                <button class="button">10pm-11pm</button>
                <div class="panel">
				<?php
				require '../includes/dbcricket.inc.php.php';
				$first=1;
				$sql="SELECT villa_number FROM basketball WHERE time17=$first";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if($resultCheck>0){
					while($row= mysqli_fetch_assoc($result)){
						echo '<h3 style="font-family:helvetica; color:#ff3333; font-size:1.5vw; margin-bottom:2%;">Booked by:</h3>'.$row['villa_number'];
					}
				}
				else{
					echo '<form action="../includes/checkbasketball16.php" method="POST"><button class="apply" align="center" name="submit" id="submit">Apply</button></form>';
				}
				?>
				</div>
            </div>
            </div>
        </div>
		<div class="row" align="center" style="margin-top:4%;">
				<div style="height:auto; width:100%; float:left; padding:15px;">
						<form action="../logout/logout.php"><button style="background-color:red;width:35%; border:none; padding:15px; border-radius:18px; font-family:helvetica;font-weight:bold; font-size:1.5vw;">Logout</button>
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