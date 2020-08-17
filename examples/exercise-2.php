<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<?php
		date_default_timezone_set("Asia/Seoul");
		echo "Today is " . date("Y/M/d") . "<br>";
		echo "Today is " . date("y.m.d") . "<br>";
		echo "Today is " . date("Y-m-d") . "<br>";
		echo "Today is " . date("l"). "<br>". "<br>";
		
		echo "The time is " . date("h:i:sA"). "<br>";
		echo "The time is " . date("h:i:sa"). "<br>". "<br>";
		
		$d=mktime(11, 55, 55, 10, 6, 2014);
		echo "Homework is due " . date("Y-m-d h:i:sa", $d). "<br>";
		
		$d=strtotime("tomorrow");
		echo date("Y-m-d h:i:sa", $d) . "<br>";

		$d=strtotime("next Saturday");
		echo date("Y-m-d h:i:sa", $d) . "<br>";

		$d=strtotime("-3 Months");
		echo date("Y-m-d h:i:sa", $d) . "<br>";
		
		$startdate = strtotime("Tuesday");
		$enddate = strtotime("+6 weeks",$startdate);

		while ($startdate <  $enddate) {
			echo date("M d", $startdate),"<br>";
			$startdate = strtotime("+1 week", $startdate);
		}
		
		$d1 = strtotime("July 04");
		$d2 = ceil( ($d1-time())/60/60/24 );
		echo "There are " . $d2 ." days until 4th of July.";

		?>
	<hr>
	&copy; 2010-<?php echo date("Y")?>
	
	</body>
</html>