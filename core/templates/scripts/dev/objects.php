<div id='developement'>
	<?php global $Kimai; ?>
	<h2>Customers</h2>
	<?php foreach($Kimai->getCustomers() as $Customer): ?>
		<?php /* @var $Customer Customer */ ?>
		<div style="padding-left:20px;">
			<h3 style="margin-bottom:0;">Information</h3>
			<p style="margin-top:0;padding-left:20px;">
				<b>Name:</b> <?php echo $Customer->getName(); ?><br />
				<b>Address:</b> <?php echo $Customer->getAddress()->toString(); ?>
			</p>
			<h3 style="margin-bottom:0;">Active Projects</h3>
			<div style="padding-left:20px;">
				<?php foreach($Customer->getProjects() as $Project): ?>
					<?php /* @var $Project Project */ ?>
					<?php if($Project->isVisible()): ?>
						<p style="margin-top:0;">
							<b>Name:</b> <?php echo $Project->getName(); ?>
						</p>
						<p style="margin-top:0;padding-left:20px;">
							<b>Budget:</b> <?php echo $Project->getBudget(); ?><br />
							<b>Approved:</b> <?php echo $Project->getApproved(); ?><br />
							<b>Effort:</b> <?php echo $Project->getEffort(); ?>
						</p>
						<div style="padding-left:20px;">
							<h4 style="margin-bottom:0;">Active Activities</h4>
							<p style="margin-top:0;padding-left:20px;">
								<?php foreach($Project->getActivities() as $Activity): ?>
									<?php /* @var $Activity Activity */ ?>
									<?php if($Activity->isVisible()): ?>
										<?php echo $Activity->getName(); ?>(<?php echo $Activity->getBudget(); ?>, <?php echo $Activity->getApproved(); ?>, <?php echo $Activity->getEffort(); ?>)<br />
									<?php endif; ?>
								<?php endforeach; ?>
							</p>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
		<hr />
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
