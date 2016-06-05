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

// Replace site title tag styling
beans_replace_attribute( 'beans_site_title_tag', 'class', 'uk-text-muted', 'uk-text-center uk-margin-top uk-text-break uk-text-success' );

// beans_modify_action_hook( 'beans_post_image', 'beans_post_title_before_markup' );

// Removing the site branding.
beans_remove_action( 'beans_site_title_tag' );

// Add Header Bar
beans_add_action( 'beans_header_before_markup', 'header_bar' );

// Modifying site title tag location
beans_modify_action_hook( 'beans_site_title_tag', 'header_bar_before_markup' );

// Style beans_site_title_tag
function header_bar() {

    ?>
    <div class="tm-header-bar uk-block-muted">

        <div class="uk-container uk-container-center uk-text-justify">

            <div class="uk-grid" data-uk-grid-match data-uk-margin>
                <div class="uk-width-large-1-2 uk-width-medium-1-2 uk-text-primary uk-text-middle uk-text-left uk-text-center-small uk-text-break">
                    <?php echo beans_site_title_tag(); ?>
                </div>
                <div class="uk-width-large-1-2 uk-width-medium-1-2 uk-text-right uk-text-middle uk-text-center-small">
                    <a href="tel:1-408-555-5555">Call now to get your beans!</a>
                </div>
            </div>

        </div>

    </div>
    <?php

}