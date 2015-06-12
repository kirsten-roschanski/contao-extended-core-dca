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
 * Show page id
 */
$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'id';
$GLOBALS['TL_DCA']['tl_page']['list']['label']['format'] = '%s <span style="color: #A3A3A3; padding-left: 3px;">[ID: %s]</span>';
