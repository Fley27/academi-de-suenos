<?php /* /payment/?course=nat&package=IRA */ ?>

<div class="prices">
    <div class="prices-container">
        <div id = "prices" class="prices-title">
            <span>Our Packages</span>
        </div>

        <div class="packages">
            <div class="package package-blue">
                <div class="package-title">In-Person <br/>for R&A Clients</div>
                <div class="package-description">
                    Includes group and private classes, access to LMS materials, 
                    access to teacher-led grammar webinars and British 
                    Council certificate of achievement.
                </div>
                <div class="package-class-number">10 CLASSES</div>
                <div class="package-bar"></div>
                <div class="package-price">USD$ 399.99</div>
                <?php echo do_shortcode('[wp_stripe_checkout id="75"]'); ?>
            </div>

            <div class="package">
                <div class="package-title">In-Person <br/> for New Clients</div>
                <div class="package-description">
                    Includes group and private classes, access to LMS materials, 
                    access to teacher-led grammar webinars and British 
                    Council certificate of achievement.
                </div>
                <div class="package-class-number">10 CLASSES</div>
                <div class="package-bar"></div>
                <div class="package-price">USD$ 599.99</div>
                <?php echo do_shortcode('[wp_stripe_checkout id="76"]'); ?>
            </div>
        </div>
    </div>
    
    </div>
</div>


<?php
    /*
    <div class="modal-registration">
    <div class="modal-registration-container">
        <div class="close-registration"><i class="fa-solid fa-xmark"></i></div>
        <div class="modal-registration-title">
            Welcome!
        </div>
        <div class="modal-registration-form">
            <?php 
                echo do_shortcode('[forminator_form id="69"]');
            ?>
        </div>
        <div class="modal-registration-redirect">
            Don not have an account? <span>Register</span=>
        </div>
        <footer  class = "footer-registration">
            <div class="f-r-copyright">
                © 2023 <a href = "/" >Academia de Sueños.</a> All rights reserved.
            </div>
        </footer>
    </div>

    <div class="registration-container hidden">
        <div class="close-registration"><i class="fa-solid fa-xmark"></i></div>
        <div class="registration-title">
            Join Now!
        </div>
        <div class="registration-form">
            <?php
                echo do_shortcode('[forminator_form id="68"]');
            ?>
        </div>
        <div class="registration-redirect">
            Already have an account? <span>Login</span>
        </div>

        <footer  class = "footer-registration">
            <div class="f-r-copyright">
                © 2023 <a href = "/">Academia de Sueños.</a> All rights reserved.
            </div>
        </footer>
    </div>
    </div>
    */
?>