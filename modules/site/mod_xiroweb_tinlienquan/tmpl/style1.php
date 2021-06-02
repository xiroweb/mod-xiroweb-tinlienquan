<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_xiroweb_tinlienquan
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('stylesheet', 'mod_xiroweb_tinlienquan/style1.css', array('version' => 'auto', 'relative' => true));

?>

<div class="module<?php echo $moduleclass_sfx; ?> mod-tinlienquan-style1">
<?php foreach ($list as  $listname => $items) : ?>
	<?php require JModuleHelper::getLayoutPath('mod_xiroweb_tinlienquan', 'items_defaut'); ?>
<?php endforeach; ?>
</div>