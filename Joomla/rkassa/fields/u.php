<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');
class JFormFieldU extends JFormField {

	/**
	 * Element name
	 *
	 * @access    protected
	 * @var        string
	 */
	var $type = 'u';

	protected function getInput() {

	 
		$url = JURI::root()."index.php?option=com_virtuemart&view=pluginresponse&task=pluginnotification&method=rkassa&tmpl=component";
	 	$html = '<center> ' . $url . ' </center>';
		 
		return $html;
	}

}