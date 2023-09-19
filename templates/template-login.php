<?php

    /* 
        Template Name: Login
    */

    
?>


<?php
    get_header('login');
?>


<?php
    $course = isset($_GET['course']) ? intval($_GET['course']) : "";

    $course;
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
                © 2023 <a href = "/" >Academia de Sueños.</a> All rights reserved.
            </div>
        </footer>
    </div>
</div>

<?php
    get_footer('login');
?>