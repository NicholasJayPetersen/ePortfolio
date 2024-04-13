					<?php

					#Tuition calculator for tuition.php

					$residency= mb_substr($_POST['residency'],0,1);
					$lowerCredits= mb_substr($_POST['upperCredits'],0,2);
					$upperCredits= mb_substr($_POST['upperCredits'],0,2);
					$finInfo= mb_substr($_POST['finInfo'],0,1);
					$totalCreds= $lowerCredits + $upperCredits;
					$tuition= 0;
					$estimate- 0;
					$regFee = 50;
					$infraFee = 60;
					$techFeeHour = 4;
					$activityFeeHour = 2;
					$serviceFeeHour = 18;

					if($totalCreds == 0){
						echo("<p>Your choice was invalid. Please entere at least one credit hour for either upper or lower credits</p>
						<a>href=\"javascript:history.go(-1)\">Go back</a></p>");
					}

					elseif($residency == "inDistrict"){
						$tuition = ($lowerCredits * 115.50) + ($upperCredits * 200);
						$estimate = $tuition + ($serviceFeeHour * $totalCreds) + ($techFeeHour * $totalCreds) + ($activityFeeHour * $totalCreds) + $regFee + $infraFee;
					}

					elseif($residency == "outDistrict"){
						$tuition = ($lowerCredits * 202) + ($upperCredits * 200);
						$estimate = $tuition + ($serviceFeeHour * $totalCreds) + ($techFeeHour * $totalCreds) + ($activityFeeHour * $totalCreds) + $regFee + $infraFee;
					}

					else{
						$tuition = ($lowerCredits * 292.50) + ($upperCredits * 200);
						$estimate = $tuition + ($serviceFeeHour * $totalCreds) + ($techFeeHour * $totalCreds) + ($activityFeeHour * $totalCreds) + $regFee + $infraFee;
					}

					echo("<p> your tuition estimate is: $" . number_format($estimate, 2) . "</p>");


					if($finAid == "yes"){
						echo('<p>Here is a link to the <a href="https:"//www.hfcc.edu/financial-aid">Financial Aid Office</a></p>');
					}

					else{
					
					};



					?>