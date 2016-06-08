<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => '',
	'password' => 'E6we2dvr',
	'database' => 'ss_snow',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');
