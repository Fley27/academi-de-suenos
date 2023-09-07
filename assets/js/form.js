jQuery(document).ready(function() {
    // Find all elements with a data-name attribute
    jQuery('[data-name]').each(function() {
      var name = jQuery(this).data('name'); // Get the data-name attribute value
      jQuery(this).addClass(' ' + name); // Add a class based on the attribute value
    });
});