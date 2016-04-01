<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_seniordesignproject
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1>Senior Design Project</h1>
<div id="sdp">
	<div class="sdp-list">
		<?php
		foreach($this->items as $row):
		?>	

		<div class="sdp-projects">
			<p class="sdp-title"><a href="<?php echo JRoute::_('index.php?view=details&id='.$row->id); ?>"><?php echo $row->title ?></p>
			<p class="sdp-date"><?php echo $row->year ?></p>
		</div>

		<?php endforeach; ?>

	</div>

	<div>
		<p class="counter"><?php echo $this->pagination->getPagesCounter(); ?></p>
		<?php echo $this->pagination->getPagesLinks(); ?>
	</div>
</div>