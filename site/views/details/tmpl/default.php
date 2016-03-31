<?php defined('_JEXEC') or die('Restricted access'); ?>

<div id="sdp-projects">
	<h1><?php echo $this->seniordesignproject->title ?></h1>
	<div class="sdpdetails">
		<p class="date"><?php echo $this->seniordesignproject->year ?></p>
		<p class="students"><?php echo $this->seniordesignproject->students ?></p>
		<p class="solution"><?php echo $this->seniordesignproject->solution ?></p>
		<p class="reqs"><?php echo $this->seniordesignproject->reqs ?></p>
		<p class="semester"><?php echo $this->seniordesignproject->semester ?></p>
		<p class="team"><?php echo $this->seniordesignproject->team_photo ?></p>
		<p class="image1"><?php echo $this->seniordesignproject->graphic1 ?></p>
		<p class="image2"><?php echo $this->seniordesignproject->graphic2 ?></p>
		<p class="webcast"><?php echo $this->seniordesignproject->webcast ?></p>
		<p class="problem"><?php echo $this->seniordesignproject->problem ?></p>
		<p class="company"><?php echo $this->seniordesignproject->company ?></p>	
	</div>
</div>