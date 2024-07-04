<?php
session_start();

if  (isset($_POST['submit'])){
	
	require 'dbcricket.inc.php.php';
	
	$villanumber= $_SESSION['villa_no'];
	$first = 1;
	
	$sql = "SELECT villa_number FROM football WHERE villa_number = $villanumber";
	$stmt= mysqli_stmt_init($conn);
	
	if (!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../Courts/footballcourt.php?error=mysqlifaliure");
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt, "i" ,$villanumber);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$result=mysqli_stmt_num_rows($stmt);
		
		if($result>0){
			header("Location: ../Courts/footballcourt.php?error=you_have_already_booked");
			exit();
		}
		else{
			$sql="SELECT * FROM football WHERE time4=$first";
			$stmt=mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../Court/footballcourt.php?error=mysqlierror");
				exit();
				}
			else{
				mysqli_stmt_bind_param($stmt, "b",$first);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$result1=mysqli_stmt_num_rows($stmt);
				
				if($result1>0){
					header("Location: ../Courts/footballcourt.php?error=already_booked");
					exit();
				}
				else{
					$sql="INSERT INTO football (villa_number,time4) VALUES ($villanumber,$first)";
					$stmt=mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql)){
						header("Location: ../Court/footballcourt.php?error=mysqlifaliure");
						exit();
					}
					else{
						mysqli_stmt_bind_param($stmt, "ib",$villanumber,$first);
						mysqli_execute($stmt);
						header("Location: ../Courts/footballcourt.php?bookingsuccess");
						exit();
					}
				}
			}
		}
	}
	}


?>