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
/* OpfControlHrefRow.php */
$rDir = str_repeat('../', substr_count($_SERVER['PHP_SELF'],'/')-3);
include_once($rDir.'openface/php/helpers/OpfHelperHtml.php');

class OpfControlHrefRow {

  const CLASS_DIV_SUBPANEL = 'subpanel';
  const CLASS_TD_SUBPANEL = 'subpanel';

  protected $choiceArray;

  public function __construct($choiceArray) {
    $this->choiceArray = $choiceArray;
  } // __construct

  public function render() {
    $str = '<div class="'.self::CLASS_DIV_SUBPANEL.'" width="100%">'
      .OpfHelperHtml::tableHeader('100%')
      .'<tr><td width="100%">'
      .implode(OpfHelperHtml::pipe(), $this->choiceArray)
      .'</td></tr>'
      .'</table></div>';
    return($str);
  } // render

} // OpfControlHrefRow
?>
