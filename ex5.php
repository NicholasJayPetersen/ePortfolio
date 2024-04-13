<!DocType html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="sytle.css">
	<title>PHP example 3</title>
</head>

<body>

	<?php
		$checking = 5000;
		if ($checking >1000000){
			echo "<p>You are rich!</p>";
		}
		elseif ($checking > 1000 && $checking <= 999999) {
			echo "<p>You are pretty ok!</p>";
		}
		elseif ($checking >0 && $checking <= 999) {
			echo "<p>Well you're not broke yet!</p>";
		}
		else {
			echo "<p>You are in debt!</p>";
		}
	?>
	
</body>
</html>