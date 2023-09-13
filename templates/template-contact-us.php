<?php
    /* 
        Template Name: Contact
    */
?>

<?php
    get_header("contact-us")
?>


<?php 
    get_template_part('includes/section', "contact-information");
?>  

<?php 
    get_template_part('includes/section', "form");
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

