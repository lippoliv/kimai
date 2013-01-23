<div id='developement'>
	<?php global $Kimai; ?>
	<h2>Customers</h2>
	<?php foreach($Kimai->getCustomers() as $Customer): ?>
		<?php echo $Customer->toString(); ?><br />
	<?php endforeach; ?>
	
	<h2>Projects</h2>
	<?php foreach($Kimai->getProjects() as $Project): ?>
		<?php echo $Project->toString(); ?><br />
	<?php endforeach; ?>
	
	<h2>Activities</h2>
	<?php foreach($Kimai->getActivities() as $Activity): ?>
		<?php echo $Activity->toString(); ?><br />
	<?php endforeach; ?>
</div>
