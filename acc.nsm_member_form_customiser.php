<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * NSM Member Form Customiser Accessory
 *
 * Set the following in your config:
 * 
 * $config['nsm_member_form_customiser_hide'] = array();
 * $config['nsm_member_form_customiser_order'] = array();
 *
 * Array elements are the hidden fields. Custom fields must be represented as m_field_id_n where n is the field id
 *
 * @package			NsmMemberFormCustomiser
 * @version			1.0.0
 * @author			Leevi Graham <http://leevigraham.com> - Technical Director, Newism
 * @copyright 		Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://expressionengine-addons.com/nsm-member-form-customiser
 * @see				http://expressionengine.com/public_beta/docs/development/accessories.html
 */
class Nsm_member_form_customiser_acc
{
	var $id;
	var $version		= '1.0.0';
	var $name			= 'NSM Member Form Customiser';
	var $description	= 'Show, hide and reorder member fields is the CP';
	var $sections		= array();

	function set_sections()
	{
		$EE =& get_instance();

		$js = '$("#accessoryTabs a.nsm_member_form_customiser_acc").parent().remove(); ';

		if(is_array($hide = $EE->config->item('nsm_member_form_customiser_hide')))
			$js .= '$("#'. implode(", #", $hide). '").parent().hide(); ';

		if(is_array($order = $EE->config->item('nsm_member_form_customiser_order')))
			foreach (array_reverse($order) as $key)
				$js .= '$("#'.$key.'").parent().prependTo("#registerUser form"); ';

		$this->id = strtolower(__CLASS__);
		$js = '<script type="text/javascript" charset="utf-8">'.$js.'</script>';
		$this->sections[] = $js;
	}
}