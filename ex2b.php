	<?php
	$num1= random_int(1, 12);
	$num2= random_int(1, 12);	
	$product = $num1 * $num2;
	
	echo "<p> Random times table Example: $num1 * $num2 = <button type='button' id='showAnswer'>Show Answer</button> </p>";
	?>
	
	<div id="result"></div>
	<br>
	<button type = "button" onClick="window.location.reload()">Another one!</button>

	<script>
		const phpvar = <?php echo $product ?>;
		const element = document.getElementById("showAnswer");
		element.addEventListener("click", returnResult)
		function returnResult(){
			document.getElementById("result").innerHTML = phpvar ;
		}
	</script>