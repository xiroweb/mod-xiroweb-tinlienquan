<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_xiroweb_tinlienquan
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<?php if ( $params->get('show_'.$listname, 0)) : ?>
<<?php echo $params->get('title_heading', 'h4'); ?>>
	<?php echo $params->get('title'.$listname, ''); ?>
</<?php echo $params->get('title_heading', 'h4'); ?>>
<?php endif; ?>
<ul>
	<?php foreach ($items as  $key => $item) : ?>
				<?php $images = json_decode($item->images);
				 ?>
				<li>
					<a class="tinlienquan-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>

				<?php if ($item->displayHits) : ?>
					<span class="tinlienquan-hits">
					<?php echo JText::_('MOD_XIROWEB_LUOTXEM'); ?><?php echo $item->displayHits; ?>
					</span>
				<?php endif; ?>

				<?php if ($params->get('show_author')) : ?>
					<span class="tinlienquan-writtenby">
					<?php echo JText::_('MOD_XIROWEB_AUTHORNAME'); ?><?php echo $item->displayAuthorName; ?>
					</span>
				<?php endif; ?>

				<?php if ($item->displayCategoryTitle) : ?>
					<span class="tinlienquan-category">
					<?php echo JText::_('MOD_XIROWEB_CATEGORYTITLE'); ?><?php echo $item->displayCategoryTitle; ?>
					</span>
				<?php endif; ?>

				<?php if ($item->displayDate) : ?>
					<span class="tinlienquan-date">
						<?php echo $item->displayDate; ?>
					</span>
				<?php endif; ?>
			</li>
	
		<?php endforeach; ?>
</ul>