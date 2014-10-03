<!DOCTYPE html>
<html>
<head>
	<title>Example 1</title>
	<meta charset="utf-8">
</head>
<body>
		<h1>Answer</h1>

		<?php

			$w1 = $_GET["txtWord1"];

			$w2 = $_GET["txtWord2"];

			$w3 = (2*3.14*$w1*$w1) + (2*3.14*$w1*$w2);
					
					
			print "<p> The surface area of this cylinder is $w3. square units</p>";

		?>

</body>
</html>
		