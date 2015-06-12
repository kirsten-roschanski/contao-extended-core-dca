<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   ExtendedDCA
 * @author    Kirsten Roschanski
 * @license   LGPL
 * @copyright 2015
 */

/*
 * Show article id
 */
$GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'id';
$GLOBALS['TL_DCA']['tl_article']['list']['label']['format'] = '%s <span style="color: #A3A3A3; padding-left: 3px;">[%s, ID: %s]</span>';
