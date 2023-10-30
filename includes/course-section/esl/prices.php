<?php /* /payment/?course=nat&package=IRA */ ?>

<div class="prices">
    <div class="prices-container">
        <div id = "prices" class="prices-title">
            <span>Our Packages</span>
        </div>

        <div class="packages">
            <div class="package">
                <div class="package-title">IN-PERSON <br/> FOR NEW R&A CLIENTS</div>
                <div class="package-description">
                    Includes in-person classes and access to course materials via our Learning Management System (LMS), which is Canvas. Additionally, all curriculum is taught by a native English-speaking licensed attorney and a certified bilingual teacher. The course lasts for 5 weeks, with 2 classes per week, each lasting one hour
                </div>
                <div class="package-class-number">2 CLASSES / WEEK</div>
                <div class="package-bar"></div>
                <div class="package-price">USD $300</div>
                <?php echo do_shortcode('[wp_stripe_checkout id="75"]'); ?>
            </div>

            <div class="package package-blue">
                <div class="package-title">In-Person <br/>for Former R&A Clients</div>
                <div class="package-description">
                    Includes in-person classes and access to course materials via our Learning Management System (LMS), which is Canvas. Additionally, all curriculum is taught by a native English-speaking licensed attorney and a certified bilingual teacher. The course lasts for 5 weeks, with 2 classes per week, each lasting one hour
                </div>
                <div class="package-class-number">2 CLASSES / WEEK</div>
                <div class="package-bar"></div>
                <div class="package-price">USD $400</div>
                <?php echo do_shortcode('[wp_stripe_checkout id="75"]'); ?>
            </div>

            <div class="package">
                <div class="package-title">In-Person <br/> for New Clients</div>
                <div class="package-description">
                    Includes in-person classes and access to course materials via our Learning Management System (LMS), which is Canvas. Additionally, all curriculum is taught by a native English-speaking licensed attorney and a certified bilingual teacher. The course lasts for 5 weeks, with 2 classes per week, each lasting one hour
                </div>
                <div class="package-class-number">2 CLASSES / WEEK</div>
                <div class="package-bar"></div>
                <div class="package-price">USD $600</div>
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