<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');


t3lib_extMgm::allowTableOnStandardPages('tx_geosearch_objects');


t3lib_extMgm::addToInsertRecords('tx_geosearch_objects');

$TCA["tx_geosearch_objects"] = array (
	"ctrl" => array (
		'title' => 'LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'delete' => 'deleted',
		'enablecolumns' => array (
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'icon_tx_geosearch_objects.gif',
	),
	"feInterface" => array (
		"fe_admin_fieldList" => "hidden, name, street, postcode, city, country, telephone, mobile, fax, email, www",
	)
);


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1'] = 'layout, select_key, pages';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_pi1'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:geosearch/flexform_ds.xml');


t3lib_extMgm::addPlugin(array('LLL:EXT:geosearch/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY . '_pi1'), 'list_type');

?>