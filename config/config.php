<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
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
 * @copyright  Kamil Kuzminski 2012 
 * @author     Kamil Kuzminski <kamil.kuzminski@gmail.com> 
 * @package    TemplateOverride 
 * @license    LGPL 
 * @filesource
 */


/**
 * Register a hook to override front end templates
 */
if (TL_MODE == 'FE')
{
	$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('ModuleTemplateOverride', 'parseTemplate');
}


/**
 * 
 */
$GLOBALS['OVERRIDE_PREFIXES'] = array('mod_');
$GLOBALS['OVERRIDE_TEMPLATES'] = array();

?>