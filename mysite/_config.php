<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'hassan',
	'password' => 'Hasshasshass1@',
	'database' => 'silverstripe',
	'path' => ''
);

// Set the site locale
i18n::set_locale('fr_FR');

SSViewer::set_theme("simple");
HtmlEditorConfig::get('cms')->setOption('theme_advanced_styles', 'highlight=highlight;no-border=no-border,break=break');