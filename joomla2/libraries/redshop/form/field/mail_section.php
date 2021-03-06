<?php
/**
 * @package     RedSHOP.Library
 * @subpackage  Form.Field
 *
 * @copyright   Copyright (C) 2008 - 2017 redCOMPONENT.com. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die;

JFormHelper::loadFieldClass('list');

/**
 * Redshop Mail Section Search field.
 *
 * @since  1.0
 */
class RedshopFormFieldMail_Section extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  1.0
	 */
	public $type = 'Mail_Section';

	/**
	 * Method to get the field input markup.
	 *
	 * @return  string  The field input markup.
	 */
	protected function getOptions()
	{
		$options = RedshopHelperTemplate::getMailSections();

		foreach ($options as $value => $text)
		{
			$option = new stdClass;

			$option->text     = $text;
			$option->value    = $value;
			$option->disable  = false;
			$option->class    = '';
			$option->selected = false;
			$option->checked  = false;
		}

		return array_merge(parent::getOptions(), $options);
	}
}
