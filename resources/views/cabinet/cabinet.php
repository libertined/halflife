<?php require($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/dictionary.php'); ?>
<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/head.php'); ?>
<body>
	<div class="all">
<?php include($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/roof.php'); ?>
		<div class="main">
			<div class="dual">
				<div>
					<div class="h1"><h1><?=$words['h1_balance'] ?></h1></div>
					<div class="balance">
						<div class="money"><span class="money-digit">980</span> <span class="money-currency"><?=$words['rub'] ?></span></div>
						<div class="add-funds"><a href="#addfunds" class="turner"><?=$words['addfunds'] ?></a></div>
					</div>
					<div class="popup add-funds-form" id="addfunds">
						<div class="active-form" id="payment">
							<label class="switch1"><input type="text" name="payment[sum]" value="" placeholder="<?=$words['payment_sum_plh'] ?>"></label>							
							<label class="go-on"><a href="#" class="art-button btn-large"><?=$words['sbm_pay_sum'] ?></a></label>
						</div>
					</div>
				</div>
				<div>
					<div class="real-ticket"><a href="/ticket/"><?=$words['thereis_ticket'] ?><br>Автобус №34</a></div>
				</div>
			</div>
			<div class="buy-button">
				<div><a href="/scan/" class="art-button"><?=$words['sbm_getscan'] ?></a></div>
			</div>
			<div class="stack">
				<div class="h2"><h2 class="cntr"><?=$words['h1_history'] ?></h2></div>
				<div class="history-stack">
					
				</div>
			</div>
			<div class="exit-button"><a href="#" class="exit"><?=$words['exit'] ?></a></div>
		</div>
	</div>
</body>
</html>
