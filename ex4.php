<!DOCTYPE html>
<html>
<head>
	<title>Example 1</title>
	<meta charset="utf-8">
</head>
<body>
		<h1>Answer</h1>

		<?php

			$g = $_GET["txtNum"];

			   $s = "AA";

			if($g >= 70)
			
			
				$s = "BB";
			
			

			else if($g >= 80)
			 
			
				$s = "CC";
			
			
			
			print $s;

		?>

</body>
</html>