<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/includes/head.php'); ?>
<body>
	<div class="all">
		<div class="main">
			<div class="ticket-wrap">
			<div class="param-visual">
				<div class="ticket-bus"><span><?=$bustype[$ticket_data['type']] ?></span> <span>№<?=$ticket_data['number'] ?></span></div>
				<div class="ticket-time"><?=date("d.m.Y",$ticket_data['timestamp']) ?></div>
				<div class="ticket-cost"><?=$ticket_data['tariff'] ?> <?=$words['rub'] ?></div>
			</div>
			<div class="param-qr">
				<div class="qr-code"><img src="http://chart.apis.google.com/chart?cht=qr&chs=240x240&chl=<?=$ticket_data['hash'] ?>"></div>
			</div>
			<div class="param-pin">
				<div>4 5 3 7</div>
			</div>
			</div>
			<div><a href="/" class="art-button btn-large"><?=$words['back'] ?></a></div>
		</div>
	</div>
</body>
</html>
