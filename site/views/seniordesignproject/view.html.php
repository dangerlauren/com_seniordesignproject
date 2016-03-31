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
 
/**
 * HTML View class for the HelloWorld Component
 *
 * @since  0.0.1
 */
class SeniorDesignProjectViewSeniorDesignProject extends JViewLegacy
{
	/**
	 * Display the Senior Design Project view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = 'Senior Design Project';
 
		// Display the view
		parent::display($tpl);
	}
}