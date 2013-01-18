<div id='developement' style="color:#fff;">
	<?php global $database; ?>
	<?php foreach($database->getCustomers() as $Customer): ?>
		<?php echo $Customer->toString(); ?>
	<?php endforeach; ?>
</div>
