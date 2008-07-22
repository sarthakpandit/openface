<?php
/* Copyright (C) 2008 App Tsunami, Inc. */
/* 
 *  This program is free software: you can redistribute it and/or modify 
 *  it under the terms of the GNU General Public License as published by 
 *  the Free Software Foundation, either version 3 of the License, or 
 *  (at your option) any later version. 
 * 
 *  This program is distributed in the hope that it will be useful, 
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of 
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the 
 *  GNU General Public License for more details. 
 * 
 *  You should have received a copy of the GNU General Public License 
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>. 
 */
/* controllers/OpfControllerPostUninstall.php */
$rDir = str_repeat('../', substr_count($_SERVER['PHP_SELF'],'/')-3);
include_once($rDir.'php/opf/OpfApplication.php');
include_once($rDir.'php/opf/OpfApplicationConfig.php');
include_once($rDir.'openface/php/OpfContext.php');
include_once($rDir.'openface/php/controllers/OpfController.php');

class OpfControllerPostUninstall extends OpfController {
  const UNREGISTER_USER_METHOD = 'unregisterUser';

  public function __construct() {
    parent::__construct();
  } // __construct

  public function __destruct() {
    parent::__destruct();
  } // __destruct

  public function execute() {
    OpfApplication::unregisterUser($this->context->getUserId(), $this->context->getDbConnect());
    $this->renderApplication();
  } // execute

} // OpfControllerPostUninstall
?>
