$(document).ready(function() {
    $('#register-form').validate({
        rules: {
            email: {
                required: true,
                email: true,
                email_custom: true
            },
            contact: {
                required: true,
                phone_custom: true
            },
            password: {
                required: true,
                minlength: 8,
                password_custom: true
            },
            confirmPassword: {
                required: true,
                equalTo: "#password"
            }
        },
        messages: {
            email: {
                required: "Please enter your email address.",
                email: "Please enter a valid email address.",
                // email_custom: "Please enter a valid email address."
            },
            contact: {
                required: "Please enter your contact number.",
                phone_custom: "Please enter a valid contact number."
            },
            password: {
                required: "Please enter a password.",
                minlength: "Password must be at least 8 characters long.",
                // password_custom: "Password must contain at least one digit, one lowercase letter, one uppercase letter, and one symbol."
            },
            confirmPassword: {
                required: "Please re-enter your password.",
                equalTo: "Passwords do not match."
            }
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        }
    });

    // Custom method to validate email
    $.validator.addMethod("email_custom", function(value, element) {
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        return this.optional(element) || emailPattern.test(value);
    }, "Please enter a valid email address format.");

    // Custom method to validate phone number
    $.validator.addMethod("phone_custom", function(value, element) {
        const phonePattern = /^\+?\d{1,3}?[- ]?\(?\d{1,3}\)?[- ]?\d{1,4}[- ]?\d{1,4}$/;
        return this.optional(element) || phonePattern.test(value);
    }, "Please enter a valid contact number format.");

    // Custom method to validate password
    $.validator.addMethod("password_custom", function(value, element) {
        const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{"':;?/>.<,]).{8,}$/;
        return this.optional(element) || passwordPattern.test(value);
    }, "Password must contain at least one digit, one lowercase letter, one uppercase letter, and one symbol.");

    // Initialize datepicker
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd', // Set the desired date format
        changeMonth: true, // Allow changing months
        changeYear: true // Allow changing years
    });
    $( "#salutation" ).selectmenu();
});