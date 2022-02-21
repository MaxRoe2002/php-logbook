<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$gross = $hourlyrate * $hoursperweek;
	$aftertax = $gross - ($gross * 0.22);
	echo $aftertax;
?>
</body>
</html>
