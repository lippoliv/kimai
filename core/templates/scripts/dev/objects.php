<div id='developement'>
	<?php global $database; ?>
	<h2>Customers</h2>
	<?php foreach($database->getCustomers() as $Customer): ?>
		<?php echo $Customer->toString(); ?>
	<?php endforeach; ?>
	
	<h2>Projects</h2>
	<?php foreach($database->getProjects() as $Project): ?>
		<?php echo $Project->toString(); ?>
	<?php endforeach; ?>
</div>
