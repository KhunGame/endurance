<?php
/**
 * ENDURANCE 0.9 BETA
 *
 * HANDLER CLASS
 *
 * @package Endurance - Core
 * @author Lunarmind Intelligence Systems
 * @copyright Copyright (c) 2015 - 2025 Lunarmind Intelligence Systems
 * @copyright copyright (c) 2015 - 2018, Martin De Tour School of Management & Economics - Assumption University of Thailand(ABAC)
 * 
 * ---------------------------------------------------------------------------------------
 */

class Handler {

	public function error($code) {

		header("HTTP/1.0 404 Not Found");

		switch ($code) {
			case 404:
				$message = "The requested page is not found ";
				break;
			
			default:
				$message = "The requested page is not found";
				break;
		}

		include(APP.'templates/default/error.php');
	} 

}
?>