NSM Member Form Customiser
==========================

Hide standard custom CP member fields in "My Account". Re-order standard and custom CP Member fields.

<img src="http://s3.amazonaws.com/ember/uiXFdFUOyK8aDORipRu2rlaLvJTi3fMY_l.png" width='900' />  

Installation
------------

Install the accessory and limit it's display to "My Account". Note the accessory tab will be hidden but you should be able to check the source to see if it's working.

Settings
--------

I've put the settings inside the actual accessory, bad I know but it was a quick solution to get something working.

### Hiding custom fields

Add elements to $this->hide array to remove fields from form. Example:

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

### Reordering custom fields

Fields (including custom fields) can be re-ordered by setting `$this->reorder = TRUE` and adding custom field keys to the $this->order. Custom fields must be in the following format: `m_field_id_1`. Example:

	var $reorder = TRUE;
	var $order = array(
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
		"bio",
	);
