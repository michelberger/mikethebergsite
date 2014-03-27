<?php

require 'php.inc/vars.inc.php';
require 'php.inc/templates.inc.php';

?>

<head>
	<meta charset="utf-8" />
	<?php
	
	$new_title;
	$new_keys;
	$new_desc;
	
	if (isset($page_title) && isset($page_keys) && isset($page_desc)) {
		$new_title = $page_title;
		$new_keys  = $page_keys;
		$new_desc  = $page_desc;
	} else {
		$new_title = $default_title;
		$new_keys  = $default_keys;
		$new_desc  = $default_desc;
	}
	
	pageHead($new_title, $new_keys, $new_desc); // Located in templates.inc.php
	
	?>
	<!--link rel="canonical" href="http://miketheberg.com/"-->
	<link rel="stylesheet" href="css/main.css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.ico" type="image/icon" />
	<!--[if lt IE 9]>
		<script>
			document.createElement('header');
			document.createElement('nav');
			document.createElement('section');
			document.createElement('article');
			document.createElement('aside');
			document.createElement('footer');
		</script>
		<style type="text/css">
			header, nav, section, article, aside, footer {
				display:block;
			}
		</style>
	<![endif]-->
</head>