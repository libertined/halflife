<?php require($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/dictionary.php'); ?>
<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/head.php'); ?>
<body>
	<div class="all">
<?php include($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/roof.php'); ?>
		<div class="main">
			<div class="h1"><h1><?=$words['h1_register'] ?></h1></div>
			<div class="active-form" id="auth">
				<div class="io">
					<p class="registration-info"><?=$words['reg_info'] ?></p>
					<input type="hidden" name="auth[action]" value="register">
					<label><input type="text" name="auth[nic]" value="" placeholder="<?=$words['nic_plh'] ?>"></label>
					<label><input type="password" name="auth[passw]" value="" placeholder="<?=$words['passw2_plh'] ?>"></label>
					<p class="error switch2"></p>
				</div>
				<div class="sms-code">
					<p class="switch1"><?=$words['sms_code_info'] ?></p>
					<label><input type="text" name="auth[smscode]" value="" placeholder="<?=$words['sms_plh'] ?>"></label>
				</div>
				<label class="go-on"><a href="#" class="art-button play-button" title="<?=$words['sbm_register'] ?>">&raquo;</a></label>
			</div>
		</div>
	</div>
</body>
</html>
