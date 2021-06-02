<?php

/**
 * @copyright	Copyright (C) 2020 by XiroWeb
 * @license		GNU/GPL
 * */
// no direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Factory;

class JFormFieldConfigstyleadmin extends JFormField {

	protected $type = 'configstyleadmin';

	protected function getInput() {
			Factory::getDocument()->addStyleDeclaration('
				@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap");

				#general {
					padding: 10px;
					border-radius: 12px;
					background-color: #85FFBD;
					background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
				}
				#general > div[class*="row"] > div:nth-of-type(1) {
					font-family: "Roboto", sans-serif;
					font-size: 120%;
					font-weight: 400;
				}

				#general > div[class*="row"] > div:nth-of-type(1) .chzn-container-single .chzn-single {
					border: 2px solid #2196f3;
				}
				#general > div[class*="row"] > div:nth-of-type(1) .chzn-container .chzn-drop {
					border: 2px solid #2196f3;
				}
				#general > div[class*="row"] > div:nth-of-type(1) .chzn-container .chzn-results {
					font-weight: 700;
					color: #2196f3;
				}
			
		');
		return '';
	}

	protected function getLabel() {
		return '';
	}
}
