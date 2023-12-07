jQuery(document).ready(function() {
    // Find all elements with a data-name attribute
    jQuery('[data-name]').each(function() {
      var name = jQuery(this).data('name'); // Get the data-name attribute value
      jQuery(this).addClass(' ' + name); // Add a class based on the attribute value
    });
});


jQuery(document).ready(function($) {
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 31, 2023 23:59:59").getTime();

    // Update the countdown every 1 second
    var x = setInterval(function() {
        var now = new Date().getTime();

        // Calculate the time remaining
        var distance = countDownDate - now;

        // Calculate days, hours, minutes, and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if(days < 10) {
            days = "0" + days;
        }
        if(hours < 10) {
            hours = "0" + hours;
        }   
        if(minutes < 10) {
            minutes = "0" + minutes;
        }
        if(seconds < 10) {
            seconds = "0" + seconds;
        }

        // $("#countdown").html(days + "d " + hours + "h " + minutes + "m " + seconds + "s ");
        
        jQuery('#days').html(days);
        jQuery('#hours').html(hours);
        jQuery('#minutes').html(minutes);
        jQuery('#seconds').html(seconds);
    
    }, 1000);
});