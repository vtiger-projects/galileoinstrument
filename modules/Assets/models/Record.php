<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

/**
 * Vtiger Entity Record Model Class
 */
class Assets_Record_Model extends Vtiger_Record_Model {

	/**
	 * Function to get details for user have the permissions to do actions
	 * @return <Boolean> - true/false
	 */

	public function getEquipos($id) {
		
		$moduleName = $this->getModuleName();
		$focus = CRMEntity::getInstance($moduleName);
		if (method_exists($focus, 'getEquipos')) {
			return $focus->getEquipos($id);
		}
	}
}
