<?php
/******************************************************************************
Plugin Name: Excerpt Pages
Plugin URI:
Description: Add Excerpts to Pages, just as you would do with Posts
Version: 1.0.0
Author: Duncan Oneil <duncan.oneil@gmail.com>
Author URI:
License: GPLv2 or later
******************************************************************************/

/*  Copyright 2016
Excerpt Pages is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

Excerpt Pages is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/**
 * Add excerpt support to the Post type page. Normally in WordPress Pages
 * cannot have excerpts, but this lets WordPress treat Pages just like Posts
 * and enables the excerpt metabox so you can add an excerpt to a Page.
 */
if( ! function_exists('excerptpages_register_support') ){
    function excerptpages_register_support()
    {
        add_post_type_support( 'page', 'excerpt' );
    }
    add_action('admin_init', 'excerptpages_register_support');
}

?>
