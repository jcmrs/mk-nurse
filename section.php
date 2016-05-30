<?php
/* Template name: Section */

// Load necessary UIkit components.
add_action( 'beans_uikit_enqueue_scripts', 'start_view_enqueue_uikit_assets' );

function start_view_enqueue_uikit_assets() {

    // Enqueue your project components.
    beans_uikit_enqueue_components( array( 'base', 'print', 'block', 'breadcrumb', 'dropdown', 'grid', 'icon', 'list', 'nav', 'navbar', 'offcanvas', 'text', 'smooth-scroll', 'utility', 'sticky' ) );

}

// Core
//'animation'
// 'article'
// 'block'
// 'breadcrumb'
// 'button'
// 'contrast'
// 'dropdown'
// 'flex'
// 'grid'
// 'icon'
// 'list'
// 'modal'
// 'nav'
// 'navbar'
// 'offcanvas'
// 'overlay'
// 'panel'
// 'print'
// 'subnav'
// 'text'
// 'thumbnail'
// 'scrollspy'
// 'smooth-scroll'
// 'utility'

// Add-ons
// 'search'
// 'parallax'
// 'sticky'
// 'tooltip'

// Force template layout
add_filter( 'beans_layout', 'beans_child_view_force_layout' );

function beans_child_view_force_layout() {

    return 'c';

}



// Load document which is always needed at the bottom of template files.
beans_load_document();