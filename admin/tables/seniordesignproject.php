<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_seniordesignproject
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die('Restricted access');
 
/**
 * Senior Design Project class
 *
 * @since  0.0.1
 */
class SeniorDesignProjectTableSeniorDesignProject extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__projects', 'id', $db);
	}
}