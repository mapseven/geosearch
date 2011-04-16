<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');


$TCA["tx_geosearch_objects"] = array (
	"ctrl" => $TCA["tx_geosearch_objects"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "hidden,name,street,postcode,city,country,telephone,mobile,fax,email,www"
	),
	"feInterface" => $TCA["tx_geosearch_objects"]["feInterface"],
	"columns" => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		"name" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects.name",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "80",	
				"eval" => "trim",
			)
		),
		"street" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects.street",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "80",	
				"eval" => "trim",
			)
		),
		"postcode" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects.postcode",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "20",	
				"eval" => "required,trim",
				"required" => 1,
			)
		),
		"city" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects.city",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "80",	
				"eval" => "trim",
			)
		),
		"country" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects.country",		
			"config" => Array (
				"type" => "select",	
				"items" => Array (
					Array("",0),
				),
				"foreign_table" => "static_countries",	
				"size" => 1,	
				"minitems" => 1,
				"maxitems" => 1,
				"eval" => "required",
			)
		),
		"telephone" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects.telephone",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"mobile" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects.mobile",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"fax" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects.fax",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "30",	
				"eval" => "trim",
			)
		),
		"email" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects.email",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "80",	
				"eval" => "trim",
			)
		),
		"www" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:geosearch/locallang_db.xml:tx_geosearch_objects.www",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",	
				"max" => "80",	
				"eval" => "trim",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "hidden, name, street, postcode, city, country, telephone, mobile, fax, email, www")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);

?>