<?php
	date_default_timezone_set('Europe/Amsterdam');
	
	$time = date('H:i');
	$middag = date('12:00');
	$avond = date('18:00');
	$nacht = date('00:00');
	$ochtend = date('06:00');

	if (strtotime($time) < strtotime($middag) && strtotime($time) >= strtotime($ochtend)) {
		$goede = 'morgen';
	} elseif (strtotime($time) < strtotime($avond) && strtotime($time) >= strtotime($middag)) {
		$goede = 'middag';
	} elseif (strtotime($time) > strtotime($middag) && strtotime($time) >= strtotime($avond)) {
		$goede = 'avond';
	} elseif (strtotime($time) < strtotime($ochtend) && strtotime($time) >= strtotime($nacht)) {
		$goede = 'nacht';
	}
?>
<head>
	<title>Goede <?= $goede ?>!</title>
	<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
 <img src="img/ufo.png" class="vlieg">
<body class="<?= $goede ?>">
	<div class="text">
		<h1>Goede <?= $goede ?>!</h1>
		<h1>Het is nu <?= $time ?></h1>
	</div>
</body>
