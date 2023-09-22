<div class = "course--page">
    <div class = "course--container">
        <div class="course--container-header">
            <div class = "course--text">
                <div class = "course--title">
                    Naturalization Course 
                </div>
                <div class = "course--description">
                    We aim to provide more holistic services by purposefully preparing 
                    students for the N-400 citizenship test. Our course objectives 
                    are two-fold:
                    <br/>1- Students will be able to speak, read, and write 
                    English at the high beginning ESL level, and 
                    <br/>2- Students will be able to correctly answer at least 90 of the 100 civics questions.
                </div>
                <a href = "#prices" class = "course--btn">
                    Enroll Now!
                </a>
            </div>
            <img class = "course--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/puzzle.webp" alt="puzzle Academia De Sueños" loading="lazy">
        </div>
        <div class="body-course-content">
            <?php
                get_template_part("includes/course-section/nat/tab");
            ?>
            <?php 
                get_template_part("includes/course-section/nat/about");
            ?>
            <?php
                get_template_part("includes/course-section/nat/outcome");
            ?>
            <?php
                get_template_part("includes/course-section/nat/curriculum");
            ?>
            <?php
                get_template_part("includes/course-section/nat/prices");
            ?>            
        </div>
    </div>
</div>