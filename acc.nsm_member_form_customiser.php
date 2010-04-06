<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * NSM Member Form Customiser Accessory
 *
 * @package NsmMemberFormCustomiser
 * @version 0.0.1
 * @author Leevi Graham <http://newism.com.au>
 * @copyright Copyright (c) 2007-2009 Newism
 * @license Commercial - please see LICENSE file included with this distribution
 *
 **/
class Nsm_member_form_customiser_acc
{
	var $id;
	var $version		= '0.0.1';
	var $name			= 'NSM Member Form Customiser';
	var $description	= 'Show and hide CP member fields';
	var $sections		= array();
	

	var $hide = array(
		// "bday_y",
		// "url",
		// "location",
		// "occupation",
		// "interests",
		"aol_im",
		"icq",
		"yahoo_im",
		"msn_im",
		// "bio"
	);

	function set_sections()
	{
		$this->id = strtolower(__CLASS__);
		$js = '<script type="text/javascript" charset="utf-8"> ';
		$js .= '$("#'. implode(", #", $this->hide). '").parent().hide(); ';
		$js .= '$("#accessoryTabs a.nsm_member_form_customiser_acc").parent().remove(); ';
		$js .= '</script>';
		$this->sections[] = $js;
	}
}