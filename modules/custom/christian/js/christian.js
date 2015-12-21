(function($) {
    $(document).ready(function() {
        console.log('Greetings adventurer...');
        $('.view-display-id-page_1').hide();
        var contactFormHeight = $('#contact-form').height();
        if(contactFormHeight) {
            $('#contact-form-image').height(contactFormHeight);
        } else {
            console.log('herpderp');
        }
    });
}(jQuery));
