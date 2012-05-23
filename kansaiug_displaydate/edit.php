<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>表示日付</h2>
	<?php 
	$options = array(
		'1' => '公開日',
		'2' => '更新日',
	);
	echo $form->select('dateflag', $options, $dateflag);
	?>
</div>

<div class="ccm-block-field-group">
	<h2>表示フォーマット</h2>
	<?php 
	$options = array(
		'1' => '2012/5/14',
		'2' => '2012年5月14日',
		'3' => '2012/5/14 1:30 pm',
		'4' => '2012/5/14 13:30',
		'5' => '2012年5月14日 13時30分',
	);
	echo $form->select('dateformat', $options, $dateformat);
	?>
</div>


