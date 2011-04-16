<?php

########################################################################
# Extension Manager/Repository config file for ext "geosearch".
#
# Auto generated 17-04-2011 01:06
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Search in Proximity',
	'description' => 'Find objects in a certain proximity around a specified zip-code. Based on geonames',
	'category' => 'plugin',
	'author' => 'Kerstin Huppenbauer',
	'author_email' => 'k.huppenbauer@mapseven.de',
	'shy' => '',
	'dependencies' => 'cms,static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'static_info_tables' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:23:{s:9:"ChangeLog";s:4:"fae1";s:10:"README.txt";s:4:"ee2d";s:9:"Thumbs.db";s:4:"8944";s:26:"class.tx_geosearch_srv.php";s:4:"58b1";s:12:"ext_icon.gif";s:4:"78d9";s:17:"ext_localconf.php";s:4:"136a";s:14:"ext_tables.php";s:4:"f5a2";s:14:"ext_tables.sql";s:4:"c0fa";s:28:"ext_typoscript_constants.txt";s:4:"a5eb";s:24:"ext_typoscript_setup.txt";s:4:"1234";s:15:"flexform_ds.xml";s:4:"618a";s:29:"icon_tx_geosearch_objects.gif";s:4:"c933";s:13:"locallang.xml";s:4:"800b";s:16:"locallang_db.xml";s:4:"1b63";s:7:"tca.php";s:4:"e119";s:14:"doc/manual.pdf";s:4:"6dea";s:14:"doc/manual.sxw";s:4:"e17e";s:19:"doc/wizard_form.dat";s:4:"83f6";s:20:"doc/wizard_form.html";s:4:"43d4";s:30:"pi1/class.tx_geosearch_pi1.php";s:4:"94a4";s:17:"pi1/locallang.xml";s:4:"5915";s:17:"res/geosearch.css";s:4:"e55c";s:18:"res/geosearch.html";s:4:"4af0";}',
	'suggests' => array(
	),
);

?>