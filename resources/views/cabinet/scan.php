<?php require($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/dictionary.php'); ?>
<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/includes/head.php'); ?>
<body>
	<div class="all">
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/roof.php'); ?>
		<div class="main">
			<!--div class="h1"><h1><?=$words['h1_scan'] ?></h1></div-->
			<div class="scan">
				<div class="scan-text"><?=$words['scan_info'] ?></div>
				<div class="scan-window" id="mainbody">
					<div id="outdiv"> </div>
				</div>
			</div>
			<div><a href="/" class="art-button btn-small"><?=$words['scan_cancel'] ?></a></div>
		</div>
	</div>
	<canvas id="qr-canvas" width="800" height="600"></canvas>
	<script type="text/javascript">load();</script>
</body>
</html>
