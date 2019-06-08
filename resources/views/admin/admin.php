<?php require($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/dictionary.php'); ?>
<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/head.php'); ?>
<body>
	<div class="all admin">
<?php include($_SERVER['DOCUMENT_ROOT'].'/resources/views/includes/roof.php'); ?>
		<div class="h1"><h1><?=$words['h1_admin'] ?></h1></div>
		<div class="dual">
			<div>
				<div class="stack">
					<div class="fl-right"><a href="#addbus" class="turner insert-form round-button" title="<?=$words['h1_bus_add'] ?>">+</a></div>
					<div class="h2"><h2><?=$words['h1_bussteak'] ?></h2></div>
					<div class="search" id="bus-stack"><input type="text" name="search" value="" placeholder="<?=$words['search_bus_plh'] ?>"><a href="#"><?=$words['search_find'] ?></a></div>
					<div class="bus-stack">
						
					</div>
				</div>
				<div class="popup add-bus-form" id="addbus">
					<div class="active-form" id="bus">
					</div>
				</div>
			</div>
			<div>
				<div class="stack">
					<div class="fl-right"><a href="#addcustomer" class="turner insert-form round-button" title="<?=$words['h1_customer_add'] ?>">+</a></div>
					<div class="h2"><h2><?=$words['h1_customersteak'] ?></h2></div>
					<div class="search" id="customer-stack"><input type="text" name="search" value="" placeholder="<?=$words['search_customer_plh'] ?>"><a href="#"><?=$words['search_find'] ?></a></div>
					<div class="customer-stack">
						
					</div>
				</div>
				<div class="popup add-customer-form" id="addcustomer">
					<div class="active-form" id="customer">
					</div>
				</div>
			</div>
		</div>
		<div class="exit-button"><a href="#" class="exit"><?=$words['exit'] ?></a></div>
	</div>
</body>
</html>
