<?php
    /* 
        Template Name: About US
    */
?>

<?php
    get_header("about-us")
?>


<?php 
    get_template_part('includes/section', "mission");
?>  


<?php 
    get_template_part('includes/section', "value");
?>    

<?php 
    get_template_part('includes/section', "faq");
?>    

<?php
    get_footer();
?>

