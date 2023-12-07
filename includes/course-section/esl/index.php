<div class = "course--page">
    <div class = "course--container">
        <div class="course--container-header">
            <div class = "course--text">
                <div class = "course--title">
                    Introduction to English <br/>as a Second Language
                </div>
                <div class = "course--description">
                    Welcome to the "Introduction to English as a Second Language" 
                    course! This course is designed to provide a strong foundation 
                    in English language skills for individuals who are non-native 
                    speakers and are looking to improve their communication abilities 
                    in both social and practical contexts. Whether you are new to English 
                    or seeking to enhance your existing language skills, this course will 
                    help you gain confidence and proficiency in using English effectively.
                </div>
                <a href = "#prices" class = "course--btn">
                    Enroll Now!
                </a>
            </div>
            <img class = "course--img" src="<?php echo get_template_directory_uri(); ?>/assets/images/puzzle.webp" alt="puzzle Academia De Sueños" loading="lazy">
        </div>
        <div class="body-course-content">
            <?php
                get_template_part("includes/course-section/esl/tab");
            ?>
            <?php 
                get_template_part("includes/course-section/esl/about");
            ?>
            <?php
                get_template_part("includes/course-section/esl/outcome");
            ?>
            <?php
                get_template_part("includes/course-section/esl/curriculum");
            ?>
            <?php
                get_template_part("includes/course-section/esl/prices");
            ?>            
        </div>
    </div>
</div>