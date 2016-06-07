<?php

// Include Beans
require_once( get_template_directory() . '/lib/init.php' );


// Remove Beans Default Styling
remove_theme_support( 'beans-default-styling' );


// Enqueue uikit assets
beans_add_smart_action( 'beans_uikit_enqueue_scripts', 'mk_nurse_enqueue_uikit_assets', 5 );

function mk_nurse_enqueue_uikit_assets() {

	// Enqueue uikit overwrite theme folder
	beans_uikit_enqueue_theme( 'mk-nurse', get_stylesheet_directory_uri() . '/less/uikit' );

	// Add the theme style as a uikit fragment to have access to all the variables
	beans_compiler_add_fragment( 'uikit', get_stylesheet_directory_uri() . '/less/style.less', 'less' );

}

// Remove this action and callback function if you are not adding CSS in the style.css file.
add_action( 'wp_enqueue_scripts', 'beans_child_enqueue_assets' );

function beans_child_enqueue_assets() {

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/theme.css' );

}

// Remove Site Title Tag
beans_remove_action( 'beans_site_title_tag' );

// Remove Active from Breadcrumbs
beans_add_attribute( 'beans_breadcrumb_item[_active]', 'class', 'uk-hidden' );

// Modify Beans Main.
beans_add_attribute( 'beans_main', 'class', 'uk-padding-remove' );
// beans_add_attribute( 'beans_main', 'class', 'uk-padding-top-remove' );
// beans_add_attribute( 'beans_main', 'class', 'uk-margin-bottom-remove' );

// Add Back to Top.
add_action( 'beans_body_prepend_markup', 'back_to_top_anchor' );

function back_to_top_anchor() {

    ?><div id="blue-top"></div><?php

}

// Modify Beans Widget Title.
beans_modify_markup( 'beans_widget_title', 'h4' );

// Add Header Bar
add_action( 'beans_header_before_markup', 'blue_header_bar' );
function blue_header_bar() {
	?>
	<div class="blue-header-bar uk-block-muted">
		<div class="uk-container uk-container-center uk-text-justify">
			<div class="uk-grid uk-contrast" data-uk-grid-match data-uk-margin>
    			<div class="uk-width-large-1-2 uk-width-medium-1-1 uk-text-left uk-text-middle uk-text-center-medium uk-text-center-small uk-hidden-medium uk-hidden-small">
    			    <?php beans_site_title_tag(); ?>
    			</div>
    			<div class="uk-width-large-1-2 uk-width-medium-1-1 uk-text-right uk-text-middle uk-text-center-medium uk-text-center-small">
    				<a href="#"><i class="uk-icon-map-marker"></i> Locaties</a> <a href="mailto:info@mail.net"><i class="uk-icon-envelope"></i> info @ mail.net</a> <a href="tel:1-562-867-5309"><i class="uk-icon-phone-square"></i> 562-867-5309</a>
    			</div>
			</div>
		</div>
	</div>
	<?php
}