<?php
    /* 
        Template Name: Register
    */      
?>


<?php
    get_header('register');
?>

<div class="registration">
    <div class="registration-container">
        <div class="registration-title">
            Join Now!
        </div>
        <div class="registration-form">
            <?php
                echo do_shortcode('[forminator_form id="59"]');
            ?>
        </div>
        <div class="registration-redirect">
            Already have an account? <a href="/login">Login</a>
        </div>

        <footer  class = "footer-registration">
            <div class="f-r-copyright">
                © 2023 <a href = "/">Academia de Sueños.</a> All rights reserved.
            </div>
        </footer>
    </div>
</div>

<?php
    get_footer('register');
?>