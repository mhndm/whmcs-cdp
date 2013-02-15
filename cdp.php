<?php
/*
 * cdp.php
 * Copyright 2013 Jacob Godin
 * Distributed under the GNU General Public License (GPL)
 */

function cdp_ConfigOptions() {
	$config_options = array (
		"Username" => array ( 
			"Type" => "text", 
			"Size" => "15", 
		),
		"Password" => array ( 
			"Type" => "text", 
			"Size" => "15", 
		),
		"E-mail Address" => array (
			"Type" => "text",
			"Size" => "30",
		),
	);

	return $config_options;	
}

function cdp_CreateAccount() {
	echo $serverip;
}
