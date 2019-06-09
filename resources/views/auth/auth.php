<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/includes/head.php'); ?>
<body>
	<div class="all">
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/roof.php'); ?>
		<div class="main">
			<div class="h1"><h1><?=$words['h1_authorize'] ?></h1></div>
			<div class="active-form" id="auth">
				<div class="io">
					<input type="hidden" name="auth[action]" value="auth">
					<label><input type="text" name="auth[nic]" value="" placeholder="<?=$words['nic_plh'] ?>"></label>
					<label><input type="password" name="auth[passw]" value="" placeholder="<?=$words['passw_plh'] ?>"></label>
					<p class="error switch2"></p>
				</div>
				<div class="sms-code">
					<!--p class="switch1"><?=$words['sms_code_info'] ?></p-->
					<label><input type="text" name="auth[smscode]" value="" placeholder="<?=$words['sms_plh'] ?>"></label>
				</div>
				<label class="go-on"><a href="#" class="art-button play-button"></a></label>
			</div>
			<div>
				<p class="register-link"><a href="/register/"><?=$words['sbm_register'] ?></a></p>
			</div>
			<div>
				<label class="onepay"><a href="/scan/" class="art-button art22 btn-large"><?=$words['onepay_link'] ?></a></label>
			</div>
			<div class="three-on-floor">
				<div class="forgot"><a href="#"><?=$words['forgot_passw'] ?></a><span>i</span></div>
				<div class="weakview"><a href="#"></a></div>
				<div class="lang"><a href="en" class="flags en"></a></div>
			</div>
		</div>
	</div>
</body>
</html>
