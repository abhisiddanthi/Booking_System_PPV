<?php
session_start();

if(isset($_POST['submit'])){
	require'db.inc.php';
	$villanumber=$_SESSION['villa_no'];
	$first=1;

	$sql="DELETE FROM booking WHERE villa_number=$villanumber";
	$stmt=mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location:../court.php?error=mysqlifailure");
		exit();
	}
	else{
		mysqli_stmt_bind_param($stmt,"i",$villanumber);
		mysqli_execute($stmt);
		header("Location: ../homepage.php?error=cancel");
		exit();
	}
}

?>