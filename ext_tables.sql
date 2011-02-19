#
# Table structure for table 'tx_geosearch_objects'
#
CREATE TABLE tx_geosearch_objects (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	sorting int(10) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	name varchar(80) DEFAULT '' NOT NULL,
	street varchar(80) DEFAULT '' NOT NULL,
	postcode varchar(20) DEFAULT '' NOT NULL,
	city varchar(80) DEFAULT '' NOT NULL,
	country int(11) DEFAULT '0' NOT NULL,
	telephone varchar(30) DEFAULT '' NOT NULL,
	mobile varchar(30) DEFAULT '' NOT NULL,
	fax varchar(30) DEFAULT '' NOT NULL,
	email varchar(80) DEFAULT '' NOT NULL,
	www varchar(80) DEFAULT '' NOT NULL,
	lat varchar(30) DEFAULT '' NOT NULL,
	lng varchar(30) DEFAULT '' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_geosearch_coordinates'
#
CREATE TABLE tx_geosearch_coordinates (
	country_code varchar(2) DEFAULT '' NOT NULL,
	postal_code varchar(10) DEFAULT '' NOT NULL,
	place_name varchar(180) DEFAULT '' NOT NULL,
	admin_name1 varchar(100) DEFAULT '' NOT NULL,
	admin_code1 varchar(20) DEFAULT '' NOT NULL,
	admin_name2 varchar(100) DEFAULT '' NOT NULL,
	admin_code2 varchar(20) DEFAULT '' NOT NULL,
	admin_name3 varchar(100) DEFAULT '' NOT NULL,
	admin_code3 varchar(20) DEFAULT '' NOT NULL,
	latitude varchar(30) DEFAULT '' NOT NULL,
	longitude varchar(30) DEFAULT '' NOT NULL,
	
	KEY country_code (country_code),
	KEY postal_code (postal_code)
);