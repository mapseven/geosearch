<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007 Kerstin Huppenbauer <k.huppenbauer@mapseven.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

require_once(PATH_tslib.'class.tslib_pibase.php');
require_once(t3lib_extMgm::extPath('geosearch') . 'pi1/class.tx_geosearch_pi1.php');

class tx_geosearch_srv extends tslib_pibase {
	function main() {
		$feUserObj = tslib_eidtools::initFeUser(); // Initialize FE user object
		tslib_eidtools::connectDB(); //Connect to database
		if (t3lib_div::_GET('lat') && t3lib_div::_GET('lng') && t3lib_div::_GET('radius')) {
			$geo = t3lib_div::makeInstance('tx_geosearch_pi1');
			$sql['column'] = 'tx_geosearch_objects.*';
			$sql['table'] = 'tx_geosearch_objects, tx_geosearch_coordinates';
			$sql['where'] = 'tx_geosearch_objects.postcode = tx_geosearch_coordinates.postal_code';
			$sql['groupBy'] = 'tx_geosearch_objects.uid';

			$data['longitude'] = t3lib_div::_GET('lng');
			$data['latitude'] = t3lib_div::_GET('lat');
			$geo->piVars['radius'] = t3lib_div::_GET('radius');
			$objects = $geo->getNearestObjects($data, $sql);
			if (!empty($objects)) {
				switch (t3lib_div::_GET('format')) {
					case 'xml':
						$content = t3lib_div::array2xml_cs($objects, 'geosearch_srv', array("useIndexTagForNum" => "item"));
						header('Content-Type: text/xml; charset=utf-8');
					break;
					case 'json':
						$content = json_encode($objects);
						header('Content-Type: text/javascript; charset=utf-8');
					break;
				}
				header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
				header('Last-Modified: ' . gmdate( "D, d M Y H:i:s" ) . 'GMT');
				header('Cache-Control: no-cache, must-revalidate');
				header('Pragma: no-cache');
				header('Content-Length: ' . strlen($content));
				echo $content;
				exit;
			}
		}
	}
}

$output = t3lib_div::makeInstance('tx_geosearch_srv');
$output->main();
?>