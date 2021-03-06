<?php
/*
===========================================================================================================
Fervent - framework.php
===========================================================================================================
This is the most generic template file in a WordPress theme and is one of the required files for a theme. 
This framework.php template file allows you to add features and functionality that has been preset to be use 
in this WordPress theme which is stored in the theme's framework directory in the theme folder.

@package        Fervent WordPress Theme
@copyright      Copyright (C) 2018. Benjamin Lu
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Benjamin Lu (https://luthemes.com/)
===========================================================================================================
*/

/*
===========================================================================================================
Table of Content
===========================================================================================================
 1.0 - Require Files
===========================================================================================================
*/

/*
===========================================================================================================
 1.0 - Require Files
===========================================================================================================
*/
require_once(get_template_directory() . '/framework/core/custom-header.php');
require_once(get_template_directory() . '/framework/customize/control-radio-image.php');
require_once(get_template_directory() . '/framework/loop/main-query.php');
require_once(get_template_directory() . '/framework/menu/primary-navigation.php');