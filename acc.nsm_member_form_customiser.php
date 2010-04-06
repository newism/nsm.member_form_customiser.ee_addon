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
		"bday_y",
		// "url",
		"location",
		// "occupation",
		"interests",
		"aol_im",
		"icq",
		"yahoo_im",
		"msn_im",
		// "bio"
	);

	var $reorder = FALSE;
	var $order = array(
		"bday_y",
		"url",
		"location",
		"occupation",
		"interests",
		"aol_im",
		"icq",
		"yahoo_im",
		"msn_im",
		"bio",
		"m_field_id_1",
		"m_field_id_2",
		"m_field_id_3",
		"m_field_id_4",
		"m_field_id_5",
		"m_field_id_6",
	);

	function set_sections()
	{
		$this->id = strtolower(__CLASS__);
		$js = '<script type="text/javascript" charset="utf-8"> ';
		$js .= '$("#'. implode(", #", $this->hide). '").parent().hide(); ';
		if($this->reorder)
		{
			foreach (array_reverse($this->order) as $key){
				$js .= '$("#'.$key.'").parent().prependTo("#registerUser form"); ';
			}
		}
		$js .= '$("#accessoryTabs a.nsm_member_form_customiser_acc").parent().remove(); ';
		$js .= '</script>';
		$this->sections[] = $js;
	}
}