<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://khanh16-6.github.io/mywordpress/';
	} else {
		$uri = 'http://khanh16-6.github.io/mywordpress/';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'C:/xampp/htdocs/mypj/wordpress/');
	exit;
?>
Something is wrong with the XAMPP installation :-(
