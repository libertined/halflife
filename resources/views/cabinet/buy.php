<?php
$user_check=mydb_select('users','*',"`id`='".$uid."'",'',1);
foreach ($user_check as $ub) {$user_params=$ub;}
?>
<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/includes/head.php'); ?>
<body>
	<div class="all">
		<div class="main">
			<div class="h1"><h1><?=$words['h1_buy'] ?></h1></div>
<?php if ($user_params['balance']<$bus_data['tariff']) { ?>
			<p class="error" style="display:block;"><?=$words['no_money'] ?></p>
			<p>&nbsp;</p>
			<div><a href="/" class="art-button btn-large"><?=$words['go_to_cabinet'] ?></a></div>
<?php } else { ?>
			<div class="active-form pay-form" id="buy">
				<div class="io">
					<input type="hidden" name="buy[bus]" value="<?=$key ?>">
					<p><?=$bustype[$bus_data['type']] ?> №<?=$bus_data['number'] ?></p>
					<p><?=date("d.m.Y") ?></p>
					<p><?=$bus_data['tariff'] ?> <?=$words['rub'] ?></p>
				</div>
				<label class="go-on"><a href="#" class="art-button btn-large"><?=$words['sbm_buy'] ?></a></label>
			</div>
<?php } ?>
		</div>
	</div>
</body>
</html>
