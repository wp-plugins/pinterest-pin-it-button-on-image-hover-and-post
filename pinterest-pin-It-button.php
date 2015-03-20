<?php
/**
 * Plugin Name: Pinterest Pin It Button On Image Hover And Post
 * Version: 1.1
 * Description: Pin Your WordPress Blog Posts Pages Images With Pinterest
 * Author: Weblizar
 * Author URI: http://weblizar.com/plugins/
 * Plugin URI: http://weblizar.com/plugins/pinterest-pin-it-button/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

/**
 * Constant Values & Variables
 */
define("WEBLIZAR_PINIT_PLUGIN_URL", plugin_dir_url(__FILE__));
define("WEBLIZAR_PINIT_TD", "weblizar_pinit");

/**
 * Default Setting
 */
register_activation_hook( __FILE__, 'PiniIt_DefaultSettings' );
function PiniIt_DefaultSettings(){
    add_option("WL_Enable_Pinit_Post", 1);
    add_option("WL_Enable_Pinit_Page", 1);
	add_option("WL_Pinit_Btn_On_Hover", "true");
	add_option("WL_Pinit_Btn_Color", "red");
	add_option("WL_Pinit_Btn_Design", "rectangle");
	add_option("WL_Pinit_Btn_Size", "small");
}

//Load saved pin it button settings
$PinItOnHover 	= get_option("WL_Pinit_Btn_On_Hover");
if($PinItOnHover == "true"){ 
	// Add hook for frontend <head></head>
	add_action('wp_head', 'wl_pinit_js');
}
function wl_pinit_js() {
	$PinItOnHover 		= get_option("WL_Pinit_Btn_On_Hover");
	$PinItColor	= get_option("WL_Pinit_Btn_Color");
	$PinItSize		= get_option("WL_Pinit_Btn_Size");
    ?><script type="text/javascript" async defer  data-pin-color="<?php echo $PinItColor; ?>" <?php if($PinItSize == "large") { ?>data-pin-height="28"<?php }?> data-pin-hover="<?php echo $PinItOnHover; ?>" src="<?php echo WEBLIZAR_PINIT_PLUGIN_URL."js/pinit.js"; ?>"></script><?php
}

//Add Pin It Button After Post Content
function Load_pin_it_button_after_post_content($content){
	if (is_single()) {
		//check for enable post pin it button
		$PinItPost 		= get_option("WL_Enable_Pinit_Post");
		if(get_option("WL_Enable_Pinit_Post")) {
			$content .= '<p><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a></p>';
		}		
	}
	return $content;
}
add_filter( "the_content", "Load_pin_it_button_after_post_content" );


//Add Pin It Button After Page Content
function Load_pin_it_button_after_page_content($content){
	if (!is_single()) {
		//check for enable page pin it button
		$PinItPage 		= get_option("WL_Enable_Pinit_Page");
		if(get_option("WL_Enable_Pinit_Page")) {
			$content .= '<p><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a></p>';
		}
	}
	return $content;
}

add_filter( "the_content", "Load_pin_it_button_after_page_content" );



/**
 * Plugin Settings Admin Menu
 */
add_action('admin_menu','WL_PinItButtonPage');

function WL_PinItButtonPage() {
    $PinItAdminMenu = add_menu_page( __('Pinterest PinIt Button Settings', WEBLIZAR_PINIT_TD), __('Pinterest PinIt Button', WEBLIZAR_PINIT_TD), 'administrator', 'pinterest-pinit-button-on-hover', 'pinterest_pinit_button_settings_page', 'dashicons-admin-post');
    add_action( 'admin_print_styles-' . $PinItAdminMenu, 'PiniIt_Menu_Assets' );
}

/**
 * Load PinItAdminMenu Pages Assets JS/CSS/Images
 */
function PiniIt_Menu_Assets() {
    /**
     * All Required CSS & JS  Files
     */
	wp_enqueue_style('bootstrap_css', WEBLIZAR_PINIT_PLUGIN_URL.'css/bootstrap.css');
	wp_enqueue_style('weblizar-smartech-css', WEBLIZAR_PINIT_PLUGIN_URL.'css/weblizar-smartech.css');
	wp_enqueue_style('font-awesome_min', WEBLIZAR_PINIT_PLUGIN_URL.'font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('font-animate', WEBLIZAR_PINIT_PLUGIN_URL.'css/animate.css');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-min-js',WEBLIZAR_PINIT_PLUGIN_URL.'js/bootstrap.min.js');
	wp_enqueue_script('weblizar-smartech-js',WEBLIZAR_PINIT_PLUGIN_URL.'js/weblizar-smartech.js',array('jquery'));
}

function pinterest_pinit_button_settings_page() {
	require_once("template.php");
}

add_action( 'wp_ajax_save_pinit', 'PinItSaveSettings' );
function PinItSaveSettings() {
	update_option("WL_Enable_Pinit_Post", $_POST['PinItPost']);
	update_option("WL_Enable_Pinit_Page", $_POST['PinItPage']);
	update_option("WL_Pinit_Btn_On_Hover", $_POST['PinItOnHover']);
	update_option("WL_Pinit_Btn_Design", $_POST['PinItDesign']);
	update_option("WL_Pinit_Btn_Color", $_POST['PinItColor']);
	update_option("WL_Pinit_Btn_Size", $_POST['PinItSize']);
} ?>