<div class = "course--page">
    <div class = "course--container">
        <div class="course--container-header">
            <div class = "course--text">
                <div class = "course--title">
                    Naturalization Course
                </div>
                <div class = "course--description">
                    As the immigration landscape continues to evolve 
                    and clients seek comprehensive support, 
                    the Education Department will enable us 
                    to provide holistic services that encompass 
                    both legal representation and guidance on 
                    education opportunities for immigrants.
                </div>
                <a href = "/wordpress/why-academia-de-suenos/" class = "course--btn">
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