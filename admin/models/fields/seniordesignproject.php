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
 
JFormHelper::loadFieldClass('list');
 
/**
 * SeniorDesignProject Form Field class for the SeniorDesignProject component
 *
 * @since  0.0.1
 */
class JFormFieldSeniorDesignProject extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var         string
	 */
	protected $type = 'SeniorDesignProject';
 
	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,title,year');
		$query->from('#__projects');
		$db->setQuery((string) $query);
		$messages = $db->loadObjectList();
		$options  = array();
 
		if ($messages)
		{
			foreach ($messages as $message)
			{
				$options[] = JHtml::_('select.option', $message->id, $message->title, $message->year);
			}
		}
 
		$options = array_merge(parent::getOptions(), $options);
 
		return $options;
	}
}