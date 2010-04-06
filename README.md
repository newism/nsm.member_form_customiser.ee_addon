NSM Member Form Customiser
==========================

Show and hide CP member fields in "My Account".

<img src="http://s3.amazonaws.com/ember/uiXFdFUOyK8aDORipRu2rlaLvJTi3fMY_l.png" width='900' />  

Installation
------------

Install the accessory and limit it's display to "My Account". Note the accessory tab will be hidden but you should be able to check the source to see if it's working.

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