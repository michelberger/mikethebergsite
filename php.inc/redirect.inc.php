<?php
// This file contains overall website logic, including where to direct users based on HTML
//  GET forms

include 'vars.inc.php';

$action = 'intro'; // Default page
$no_access = array('header', 'footer'); // No access permitted to these files/pages

if (!empty($_GET['action'])) {
	$tmp_action = basename($_GET['action']);
	
	// If the requested action is not explicitly in $no_access
	if(!in_array($tmp_action, $no_access)) {
		// If file requested actually exists
		if (file_exists($tmp_action.'.php')) {
			$action = $tmp_action;
		} else { // 404 otherwise
			$action = '404';
		}
	} else { // Not allowed to access
		$action = '403';
	}
}

// Populate the header fields before page is loaded
foreach($nondefault_header_info as $element => $field) {
	if ($field[0] === $action) {
		$page_title = $field[1];
		$page_keys = $field[2];
		$page_desc = $field[3];
	}
}

?>