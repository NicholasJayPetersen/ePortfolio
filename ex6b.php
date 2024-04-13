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