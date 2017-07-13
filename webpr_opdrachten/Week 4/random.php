<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week 4 opdracht 1</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="TemplateOefeningen.css"/>
</head>
<body>
<div id="container">
    <p id="inhoud">
        <?php
			require 'zinnen.php';
			mt_srand((double)microtime() * 1000000); # Seed voor random number generator
			$getal = mt_rand(0,3); # Willekeurig getal in [0,3]
			switch($getal){
				case 0:
					$result = $S0;
					break;
				case 1:
					$result = $S1;
					break;
				case 2:
					$result = $S2;
					break;
				case 3:
					$result = $S3;
					break;
				default:
					$result = "Geen willekeurige zin gevonden";
			}
			echo $result;
		?>
    </p>
</div>
</body>
</html>
