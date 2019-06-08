<?php require($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/dictionary.php'); ?>
<?php
$user_check=mydb_select('users','*',"`id`='".$uid."'",'',1);
foreach ($user_check as $ub) {$user_params=$ub;}
?>
<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/head.php'); ?>
<body>
	<div class="all">
<?php include($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/roof.php'); ?>
		<div class="main">
			<div class="h1"><h1><?=$words['h1_buy'] ?></h1></div>
			<div class="active-form" id="buy">
				<div class="io">
					<p><?=$words['buy_info'] ?></p>
					<input type="hidden" name="buy[bus]" value="<?=$key ?>">
					<p class="p-large">Автобус №34</p>
					<p class="p-large"><?=$words['buy_cost'] ?>: 31 <?=$words['rub'] ?></p>
				</div>
				<label class="go-on"><a href="#" class="art-button btn-large"><?=$words['sbm_buy'] ?></a></label>
			</div>
		</div>
	</div>
</body>
</html>
