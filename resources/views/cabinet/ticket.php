<?php require($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/dictionary.php'); ?>
<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/includes/head.php'); ?>
<body>
	<div class="all">
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/roof.php'); ?>
		<div class="main">
			<!--div class="h1"><h1><?=$words['h1_ticket'] ?></h1></div-->
			<div class="param-qr">
				<div class="qr-code"><img src="http://chart.apis.google.com/chart?cht=qr&chs=320x320&chl=3ihdhg4hg34vr3g434r"></div>
			</div>
			<div class="param-visual">
				<div class="ticket-time"><?=date("d.m.Y H:i",$ticket_data['timestamp']) ?></div>
				<div class="ticket-bus"><span>Автобус</span> <span>№34</span> - <span>31 </span><span><?=$words['rub'] ?></span></div>
			</div>
			<p><?=$words['ticket_show_info'] ?></p>
			<p>&nbsp;</p>
			<div><a href="/" class="art-button btn-large"><?=$words['go_to_cabinet'] ?></a></div>
		</div>
	</div>
</body>
</html>
