<!DocType html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="sytle.css">
	<title>PHP example 3</title>
</head>

<body>

	<?php
		$gasPrice = 3.25;
		$threshold = 3;

		function buyGas(){
			global $gasPrice;
			echo '<p>Gas is cheap go buy now! It only costs' . $gasPrice . ' right now.</p>'; }
			
		function dontBuyGas() {
			global $gasPrice;
			echo '<p>Gas is expensive today, better check again tomorrow... It costs ' . $gasPrice . ' right now.</p>'; }
		
		if ($gasPrice < $threshold) {
			buyGas(); }
		
		else {
			dontBuyGas(); }
		
			
	?>
	
</body>
</html>