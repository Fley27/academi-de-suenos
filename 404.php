<?php
    /* Template Name: 404  */

    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
    }

    get_header("404"); 
?>


<div class="page-404">
    <div class="container-404">
        <div class="title-404">404</div>
        <div class="text-404">
            <div class="text-404-title">Oops! Page Not Found</div>
            <div class="text-404-message">
                We're sorry but the page you are looking for does not exist.  It may have been moved, deleted, or never existed in the first place.
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>