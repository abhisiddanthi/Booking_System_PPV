<html>
<body>
<form method="get">
<input type="text" name="person">
<button>Submit</button>
</form>
<?php
$name=$_GET['person'];
echo $name." is cool.";
?>
</body>
</html>