jQuery(document).ready(function(){
    
    jQuery(".package-btn").click(function(){
        jQuery(".modal-registration").toggleClass(" active-registration");
    });   


    jQuery(".package-btn-logged-in").click(function(){
        window.location.href = '/naturalization/payment?package=IRA';
    });
    
    jQuery(".package-btn-logged-in-1").click(function(){
        window.location.href = '/naturalization/payment?package=IP';
    });  
    
    jQuery(".modal-registration-redirect span").click(function(){
        jQuery(".modal-registration-container").toggleClass(" hidden");
        jQuery(".registration-container").toggleClass(" hidden");
    });  

    jQuery(".registration-redirect span").click(function(){
        jQuery(".modal-registration-container").toggleClass(" hidden");
        jQuery(".registration-container").toggleClass(" hidden");
    });  

    jQuery(".close-registration i").click(function(){
        jQuery(".modal-registration").toggleClass(" active-registration");
    });   
})
