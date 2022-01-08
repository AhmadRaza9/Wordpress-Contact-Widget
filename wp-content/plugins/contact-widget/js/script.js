jQuery(document).ready(function(){
    // Get Form
    var form = jQuery('#ajax-contact');

    // Get Message
    var formMessage = jQuery('#form-message');

    //Form Event Handler
    jQuery(form).submit(function(event){
        // Stop browser from submitting form
        event.preventDefault();

        // Serialize Form Data
        var formData = jQuery(form).serialize();

        // Submit With Ajax
        jQuery.ajax({
            type: 'POST',
            url: jQuery(form).attr('action'),
            data: formData,
        }).done(function(response){
            // Make sure message is success
            jQuery(formMessage).removeClass('error');
            jQuery(formMessage).addClass('success');

            // Set Message Text
            jQuery(formMessage).text(response);
            jQuery('#name').val('');
            jQuery('#email').val('');
            jQuery('#message').val('');
        }).fail(function(data){
            // Make sure message is error
            jQuery(formMessage).removeClass('success');
            jQuery(formMessage).addClass('error');
            
            // Set Message Text
            if(data.responseText !== ''){
                jQuery(formMessage).text(data.responseText);
            } else {
                jQuery(formMessage).text('An Error Occured');
            }
        });
    });
});