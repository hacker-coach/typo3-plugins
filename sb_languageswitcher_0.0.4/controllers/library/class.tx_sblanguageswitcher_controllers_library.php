<?
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2006 Micha Barthel
 *  Contact: barthel@sunbeam-berlin.de
 *  All rights reserved
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 ***************************************************************/
tx_div::load('tx_lib_controller');
class tx_sblanguageswitcher_controllers_library  extends tx_lib_controller{
	function defaultAction($text, $configuration) {
		return '<p>Default Controller</p>';
	}
}
if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/sb_languageswitcher/controllers/library/class.tx_sblanguageswitcher_controllers_library.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/sb_languageswitcher/controllers/library/class.tx_sblanguageswitcher_controllers_library.php']);
}

?>
