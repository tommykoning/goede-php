<?php 
	$timeZone = date_default_timezone_set('Europe/Amsterdam');
	$time = date("H:i:s");
	$pretext = "het is $time"; 
	$world = "hello world <br>";

	if ($time >="06:00" && $time < "12:00") {
		$timeday = "goede morgen, $pretext";
		$className = "morgen";
	} elseif ($time >= "12:00" && $time < "18:00") {
		$timeday = "goede middag, $pretext";
		$className ="afternoon";	
	} elseif ($time >= "18:00" && $time < "00:00") {
		$timeday = "goede avond, $pretext";
		$className = "evening";
	} elseif ($time >= "00:00" && $time < "06:00") {
		$timeday = "goede nacht, $pretext";
		$className = "night";
	} else {
		$timeday = "error, $pretext"; 

	};

 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>good morning</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body class = "<?php echo $className; ?>">
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
					echo $timeday;	
				?>
		</div>
	</body>
</html>