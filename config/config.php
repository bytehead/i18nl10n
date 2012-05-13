<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Krasimir Berov 2010-2012
 * @author     Krasimir Berov 
 * @package    MultiLanguagePage 
 * @license    LGPL3 
 * @filesource
 */

/**
* BACKEND MODULE
**/
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'] 			= is_array($GLOBALS['TL_CSS']) ? 'system/modules/i18nl10n/html/style.css' : array('system/modules/i18nl10n/html/style.css');
	$GLOBALS['TL_JAVASCRIPT'] 	= is_array($GLOBALS['TL_JAVASCRIPT']) ? 'system/modules/i18nl10n/html/l10n.js' : array('system/modules/i18nl10n/html/l10n.js');	
}

$GLOBALS['BE_MOD']['design']['i18nl10n'] = array
(
    'tables' => array('tl_page_i18nl10n'),
    'icon'   => 'system/modules/i18nl10n/html/icon.png'
);

/**
* FRONTEND MODULE
**/
$GLOBALS['FE_MOD']['navigationMenu']['i18nl10nnav'] = 'I18nL10nModuleLanguageNavigation';
$GLOBALS['FE_MOD']['navigationMenu']['breadcrumb']  = 'I18nL10nModuleBreadcrumb';

/**
* HOOKS
**/
$GLOBALS['TL_HOOKS']['generateFrontendUrl'][] 		= array('I18nL10nHooks', 'generateFrontendUrl');
$GLOBALS['TL_HOOKS']['getPageIdFromUrl'][] 			= array('I18nL10nHooks', 'getPageIdFromUrl');

$GLOBALS['TL_PTY']['regular'] =  'I18nL10nPageRegular';
 
if(!$GLOBALS['TL_CONFIG']['i18nl10n_languages']) 		$GLOBALS['TL_CONFIG']['i18nl10n_languages'] = serialize(array('de'));
if(!$GLOBALS['TL_CONFIG']['i18nl10n_default_language']) $GLOBALS['TL_CONFIG']['i18nl10n_default_language'] = 'de';


?>
