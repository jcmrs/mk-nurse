<?php
/* Template name: Landing */

// Load necessary UIkit components.
add_action( 'beans_uikit_enqueue_scripts', 'start_view_enqueue_uikit_assets' );

function start_view_enqueue_uikit_assets() {

    // Enqueue your project components.
    beans_uikit_enqueue_components( array( 'base', 'print', 'block', 'breadcrumb', 'dropdown', 'grid', 'icon', 'list', 'nav', 'navbar', 'offcanvas', 'text', 'smooth-scroll', 'utility', 'sticky', 'modal', 'tab' ) );

}

// Remove comment and content div for typography page.
beans_remove_action( 'beans_comments_template' );
beans_remove_markup( 'beans_post_content' );

// Remove layout control to force full-width.
add_filter( 'beans_layout', '__return_false' );

// Append Landing content.
add_action( 'beans_post_body_append_markup', 'mk_landing_content' );

function mk_landing_content() {

	?>
	<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
	    
	    <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-1">

                    <div class="uk-vertical-align uk-text-center" style="background: url('https://mk-nurse-jcmrs.c9users.io/wp-content/uploads/vestigingen.jpg') 50% 0 no-repeat; height: 450px;">
                        <div class="uk-vertical-align-middle uk-width-1-2">
                            <h1 class="uk-heading-large">Sample Heading</h1>
                            <p class="uk-text-large">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo.</p>
                            <p>
                                <a class="uk-button uk-button-primary uk-button-large" href="#">Button</a>
                                <a class="uk-button uk-button-large" href="#">Button</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
	    
	    <div class="uk-block-primary">
    	    <nav class="uk-navbar uk-margin-large-bottom">
                    <a class="uk-navbar-brand uk-hidden-small" href="#">On this page</a>
                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li class="uk-active">
                            <a href="#">Anchor</a>
                        </li>
                        <li>
                            <a href="#">Anchor</a>
                        </li>
                        <li>
                            <a href="#">Anchor</a>
                        </li>
                        <li>
                            <a href="#">Anchor</a>
                        </li>
                        <li>
                            <a href="#">Anchor</a>
                        </li>
                        <li>
                            <a href="#">Anchor</a>
                        </li>
                    </ul>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Brand</div>
            </nav>
        </div>
            
        <div class="uk-grid" data-uk-grid-margin>
    
            <div class="uk-width-medium-1-2">
                <img width="660" height="400" src="https://mk-nurse-jcmrs.c9users.io/wp-content/uploads/medische-keuring.jpg" alt="">
            </div>
    
            <div class="uk-width-medium-1-2">
                <h1>Heading</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <h2>Subheading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a class="uk-button uk-button-primary" href="#">Button</a> <a class="uk-button uk-button-success" href="#">Button</a>
            </div>
    
        </div>
    
        <hr class="uk-grid-divider">
    
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
                <h1>Heading</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <h2>Subheading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a class="uk-button uk-button-primary" href="#">Button</a> <a class="uk-button uk-button-success" href="#">Button</a>
            </div>
    
            <div class="uk-width-medium-1-2">
                <img width="660" height="400" src="https://mk-nurse-jcmrs.c9users.io/wp-content/uploads/pmo.jpg" alt="">
            </div>
        </div>
        
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li class="uk-active">
                        <a href="#">Anchor</a>
                    </li>
                    <li>
                        <a href="#">Anchor</a>
                    </li>
                    <li>
                        <a href="#">Anchor</a>
                    </li>
                    <li>
                        <a href="#">Anchor</a>
                    </li>
                    <li>
                        <a href="#">Anchor</a>
                    </li>
                    <li>
                        <a href="#">Anchor</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
	<?php

}

// Load document which is always needed at the bottom of template files.
beans_load_document();