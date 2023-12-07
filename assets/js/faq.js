jQuery(document).ready(function(){
    
    jQuery(".faq-item").click(function(){
        jQuery(this).toggleClass(" active");
    })
})


jQuery(document).ready(function(){
    var lang = jQuery(".trp-ls-language-name").text();
    alert
    if(lang === "Español de México")
        jQuery(".trp-ls-language-name").html("Español");
})