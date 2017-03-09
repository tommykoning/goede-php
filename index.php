<!DOCTYPE html>
<html>
	<head>
		<title>good morning</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<script type="text/javascript"> 
			var timeout = setTimeout(reload, 1000); 
			function reload() {
				$("#reload").load('index.php #reload', function(){
					timeout = setTimeout(reload, 1000);
				});
			}
		</script>
		<div id="reload">
				<?php
					date_default_timezone_set('Europe/Amsterdam');
					$time = date("h:i:s");
					$pretext = "het is $time"; 
					$timeday = "";
					$text = $pretext + $timeday;
					echo "hello world <br>";

					if ($time >="06:00" && $time < "12:00") {
						$text = "goede morgen, ";
						echo "$text";
						echo ""
					}


				?>
		</div>
	</body>
</html>