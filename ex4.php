<!DocType html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="sytle.css">
	<title>PHP example 3</title>
</head>

<body>

	<?php
		$battingAverage = .4;
		if ($battingAverage >= .27) {
			echo"<p>You are a good batter!</p>";
		}
		else {
			echo "<p>You are a terrible batter!</p>";
		}
	?>
	
</body>
</html>