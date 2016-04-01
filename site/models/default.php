<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_seniordesignproject
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * SeniorDesignProject Model
 *
 * @since  0.0.1
 */
class SeniorDesignProjectModelDefault extends JModelItem
{
	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$this->setState('list.limit', 20);
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		$query->select($db->quoteName(array('id', 'title', 'students', 'solution', 'reqs', 'semester', 'team_photo', 'graphic1', 'graphic2', 'year', 'webcast', 'problem', 'company')))
                ->from($db->quoteName('#__projects'))
                ->order('year DESC');
 		$db->setQuery($query);
		$db->execute();
		$pubs = $db->loadObjectList();
		return $query;
	}
}