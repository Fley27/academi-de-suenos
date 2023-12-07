jQuery(document).ready(function(){
    
    jQuery(".secondary-menu-button").click(function(){
        jQuery(this).toggleClass(" open");
        jQuery(".secondary-menu").toggleClass(" open-secondary-menu");

    })
})

