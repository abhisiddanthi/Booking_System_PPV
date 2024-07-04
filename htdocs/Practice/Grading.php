<html>
<body>
<form method="get">
<input type="text" name="marks" placeholder="Enter your marks!"> 
</form>
<?php
$marks=$_GET["marks"];
echo "According to your marks-".$marks." ,your grade is ";
if ($marks>=90 and $marks<=100){echo "A*";}
elseif($marks>=80 and $marks<90){echo "A";}
elseif($marks>=70 and $marks<80){echo "B";}
elseif($marks>=60 and $marks<70){echo "C";}
elseif($marks>=50 and $marks<60){echo "D";}
elseif($marks>=40 and $marks<50){echo "E";}
else{echo "U... This means that you failed";}
?>
</body>
</html>