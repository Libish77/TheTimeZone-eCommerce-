$(document).ready(function() {
    $('#login-form').validate({
        rules: {
            email: {
                required: true,
                email_custom: true
            },
            // password: {
            //     required: false,
                
            // }
        },
        messages: {
            email: {
                required: "Please enter your email address.",
                // email_custom: "Please enter a asdasdavalid email address."
            },
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },


    });
});

const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
// Custom method to validate email
$.validator.addMethod("email_custom", function(value, element) {
    return this.optional(element) || emailPattern.test(value);
}, "Please enter a valid email address.");