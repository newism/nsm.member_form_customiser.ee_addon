# NSM Member Form Customiser

Hide standard custom CP member fields in "My Account". Re-order standard and custom CP Member fields.

<img src="http://s3.amazonaws.com/ember/MeDofHNpOcBWijSRlvUOKBOpukDB6l1W_l.png" width='900' />  

## Installation

Install the accessory and limit it's display to "My Account". Note the accessory tab will be hidden but you should be able to check the source to see if it's working.

## Configuration

To hide custom fields add the following to your config.php

	$config['nsm_member_form_customiser_hide'] = array(
		"bday_y",
		"url",
		"location",
		"occupation",
		"interests",
		"aol_im",
		"icq",
		"yahoo_im",
		"msn_im",
		"bio"
	);

To reorder custom fields add the following to your config.php

	$config['nsm_member_form_customiser_order'] = array(
		// Place custom fields above standard fields
		"m_field_id_1",
		"m_field_id_2",
		"m_field_id_3",
		"m_field_id_4",
		"m_field_id_5",
		"m_field_id_6",
		// add the standard custom fields
		"bday_y",
		"url",
		"location",
		"occupation",
		"interests",
		"aol_im",
		"icq",
		"yahoo_im",
		"msn_im",
		"bio"
	);

Custom fields must be in the following format: `m_field_id_n` where _n_ is the field_id.