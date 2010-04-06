NSM Member Form Customiser
==========================

Show and hide CP member fields in "My Account".

Settings
--------

I've put the settings inside the actual accessory, bad I know but it was a quick solution to get something working.

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

@todo: Add a better settings form.