<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');
class JFormFieldLine extends JFormField {

	/**
	 * Element name
	 *
	 * @access    protected
	 * @var        string
	 */
	var $type = 'line';

	protected function getInput() {

	 
		$url = "https://roskassa.net/";
		$logo = '<img src="http://roskassa.net/assets/images/logos/logo-text-blue.svg" />';
		$html = '<center><a target="_blank" href="' . $url . '"  >' . $logo . '</a></center>';
		 
		return $html;
	}

}