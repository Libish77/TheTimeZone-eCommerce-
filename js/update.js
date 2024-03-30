$(document).ready(function() {
    $('#edit-form').validate({
        rules: {
            phone: {
                required: true,
                phone_custom: true
            },
            address: {
                required: true
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
            phone: {
                required: "Please enter your contact number.",
                phone_custom: "Please enter a valid contact number."
            },
            password: {
                required: "Please enter a password.",
                minlength: "Password must be at least 8 characters long.",
                password_custom: "Password must contain at least one digit, one lowercase letter, and one uppercase letter."
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

    // Custom method to validate phone number
    $.validator.addMethod("phone_custom", function(value, element) {
        const phonePattern = /^\+?\d{1,3}?[- ]?\(?\d{1,3}\)?[- ]?\d{1,4}[- ]?\d{1,4}$/;
        return this.optional(element) || phonePattern.test(value);
    }, "Please enter a valid contact number.");

    // Custom method to validate password
    $.validator.addMethod("password_custom", function(value, element) {
        const passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        return this.optional(element) || passwordPattern.test(value);
    }, "Password must contain at least one digit, one lowercase letter, and one uppercase letter.");
});