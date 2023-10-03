<div class = "course--page">
    <div class = "course--container">
        <div class="course--container-header">
            <div class = "course--text">
                <div class = "course--title">
                    Naturalization Course 
                </div>
                <div class = "course--description">
                    Our commitment is to offer comprehensive services geared towards 
                    thoroughly preparing students for the N-400 citizenship test. 
                    Our course objectives encompass two primary goals: firstly, 
                    to enable students to proficiently speak, read, and write 
                    English at the high beginning ESL level, and secondly, 
                    to ensure that students can accurately respond to a minimum 
                    of 90 out of the 100 civics questions.
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