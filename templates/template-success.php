<?php
    /* 
        Template Name: Success
    */
?>


<?php get_header("success"); ?>


<div class="success">
    <div class = "success-container">
        <div class = "success-content">
            <div class="success-icon">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class = "success-title">
                <h1>Thank you so much!</h1>
            </div>
            <div class = "success-message">
                <p>
                    Check your email and soon we will send you a link 
                    in order you can enroll into our LMS, so you can have 
                    access to all the course material.
                </p>
            </div>
            <div class = "success-button">
                <a href = "<?php echo site_url('/'); ?>" class = "btn btn-primary">Return to the Homepage</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>