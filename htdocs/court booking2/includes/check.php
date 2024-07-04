<?php
session_start();

if(isset($_POST['submit'])){

	require 'db.inc.php';

	$villanumber=$_SESSION['villa_no'];
	$first=1;
	$time=$_POST['submit'];
	$sport=$_SESSION["sport"];
	
	$sql="SELECT villa_number FROM booking WHERE villa_number=$villanumber";
	$stmt=mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../court.php?error=mysqlifaliure");
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"i",$villanumber);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$result=mysqli_stmt_num_rows($stmt);
		if($result>0){
			header("Location: ../court.php?error=you_have_already_booked");
			exit();
		}
		else{
			$sql="SELECT $time FROM booking WHERE $time=$first";
			$stmt=mysqli_stmt_init($conn);
			
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../court.php?error=mysqlifailure");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt,"b",$first);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$result1=mysqli_stmt_num_rows($stmt);
				if($result1>0){
					header("Location: ../court.php?error=already_booked");
					exit();
				}
				else{
					$sql="INSERT INTO booking(villa_number,sport,$time) VALUES ($villanumber,'$sport',$first)";
					$stmt=mysqli_stmt_init($conn);
					
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location: ../court.php?error=mysqlifailure");
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt,"isb",$villanumber,$sport,$first);
						mysqli_execute($stmt);
						header("Location: ../court.php?bookingsuccess");
						exit();
					}
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}


?>