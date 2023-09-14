<?php

    /* 
        Template Name: Login
    */
?>


<?php
    get_header('login');
?>

<div class="registration">
    <div class="registration-container">
        <div class="registration-title">
            Welcome!
        </div>
        <div class="registration-form">
            <?php 
                echo do_shortcode('[forminator_form id="49"]');
            ?>
        </div>
        <div class="registration-redirect">
            Don't have an account? <a href="/register">Register</a>
        </div>

        <footer  class = "footer-registration">
            <div class="f-r-copyright">
                © 2023 <span>Academia de Sueños.</span> All rights reserved.
            </div>
        </footer>
    </div>
</div>

<?php
    get_footer('login');
?>