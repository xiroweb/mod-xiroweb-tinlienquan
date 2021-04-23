<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_xiroweb_tinlienquan
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the helper functions only once
JLoader::register('ModXirowebTinlienquanHelper', __DIR__ . '/helper.php');

$input = JFactory::getApplication()->input;

// Prep for Normal or Dynamic Modes
$option = $input->get('option');
$view   = $input->get('view');

if ($option === 'com_content')
{
	switch ($view)
	{
		case 'category' :
			$idbase = $input->getInt('id');
			break;
		case 'categories' :
			$idbase = $input->getInt('id');
			break;
		case 'article' :
			if ($params->get('show_on_article_page', 1))
			{
				$idbase = $input->getInt('catid');
			}
			break;
		default:
			$idbase = 0;
		break;
	}


	$cacheid = md5(serialize(array ($idbase, $module->module, $module->id)));

	$cacheparams               = new stdClass;
	$cacheparams->cachemode    = 'id';
	$cacheparams->class        = 'ModXirowebTinlienquanHelper';
	$cacheparams->method       = 'getList';
	$cacheparams->methodparams = $params;
	$cacheparams->modeparams   = $cacheid;



	$list = JModuleHelper::moduleCache($module, $params, $cacheparams);


	if (!empty($list))
	{
		$grouped                    = false;
		$article_grouping           = $params->get('article_grouping', 'none');
		$article_grouping_direction = $params->get('article_grouping_direction', 'ksort');
		$moduleclass_sfx            = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
		$item_heading               = $params->get('item_heading');
		$stylecss					= $params->get('stylecss', 'none');

		if	($stylecss != 'none') {
			JHtml::_('stylesheet', 'mod_xiroweb_tinlienquan/'.$stylecss.'.css', array('version' => 'auto', 'relative' => true));
		}

		require JModuleHelper::getLayoutPath('mod_xiroweb_tinlienquan', $params->get('layout', 'default'));
	}
}
