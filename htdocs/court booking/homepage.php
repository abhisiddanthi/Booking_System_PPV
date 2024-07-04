<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPV homepage</title>
    <link href="homepage.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="header1" align="center">
        <ul style="margin-top:0;margin-left:0;margin-right:0;">
            <li><h1 class="ppv">PPV</h1></li>
            <li><h1 class="text" style="clear:right;">Sports Arena Time Schedule</h1></li>
        </ul>
    </div>
    <div class="background" align="center">
        <form method="POST" name="book" class="book" onsubmit="return validate()" action="games.php">
            <input type="number" align="center" id="number" pattern="{0-9}{3}" placeholder="Enter your villa number." class="book" name="villano" title="Enter your Villa Number.">
            <button type="submit" name="submit-search">Enter</button>
        </form>
    </div>
	<div align="center">
			<ol class="bottom"><b>These rules must be obeyed:</b>
				<li>1. Only one court could be booked by a user for each sport.</li>
				<li>2. No payment is required</li>
				<li>3. This is the third bullet point which has the rules</li>
			</ol>
	</div>
<?php
error_reporting(0);
$_SESSION['villa_no']=$_POST['villano'];	
?>
    <script>
        function validate() {
            var x;
            x = document.forms['book']["villano"].value;
            if (isNaN(x) || x < 1 || x > 140 || x == /^[-+]?[0-9]+\.[0-9]+$/)
            {
                alert("Enter a valid Villa Number that is between 1 and 140");
                return false;
            }
        }
    </script>
</body>
</html>