<?php
$this_user_given=mydb_select('users','*','`id`='.$uid,'',1);
foreach ($this_user_given as $user_ar) {$customer=$user_ar;}

$customer['ticket']='<span>'.$words['no_ticket'].'</span>';
$ticket_check=mydb_select('tickets','*',"`user`='".$uid."'",'`id` desc',1);
if ($ticket_check) 
{
	foreach ($ticket_check as $t) {$ticket_data=$t;}
	if ($ticket_data['timestamp']>=$now-2*3600) 
	{
		$customer['ticket']='<a href="/ticket/">'.$words['thereis_ticket'].'<br>'.$bustype[$ticket_data['type']].' №'.$ticket_data['number'].'</a>';
	}
}

?>
<!DOCTYPE html>
<html>
<?php require($_SERVER['DOCUMENT_ROOT'].'/includes/head.php'); ?>
<body>
	<div class="all">
		<div class="main">
			<div class="quatro">
				<div class="quatro-ticket"><a href="/ticket/"></a><span class="no-ticket"></span></div>
				<div class="quatro-balance"><a href="#"></a><span><?=$customer['balance']?$customer['balance']:0 ?>.00 <?=$words['rub'] ?><br>на счету</span></div>
				<div class="quatro-pay"><a href="/scan/"></a><span><?=$words['sbm_getscan'] ?></span></div>
				<div class="quatro-details"><a href="/details/"></a><span>Расходы за месяц</span></div>
			</div>	
			<div class="exit-button"><a href="#" class="exit art-button btn-large"><?=$words['exit'] ?></a></div>
		</div>
	</div>
</body>
</html>
