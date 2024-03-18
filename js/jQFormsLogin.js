$(document).ready(function() {
    $("#login-form").validate({
      rules: {
        username: {
          required: true,
          minlength: 5
        },
        password: {
          required: true,
          minlength: 8
        }
      },
      messages: {
        username: {
          required: "Please enter your username.",
          minlength: "Your username must be at least 5 characters long."
        },
        password: {
          required: "Please enter your password.",
          minlength: "Your password must be at least 8 characters long."
        }
      },
      errorElement: "div",
      errorClass: "invalid",
      highlight: function(element) {
        $(element).addClass("is-invalid");
      },
      unhighlight: function(element) {
        $(element).removeClass("is-invalid");
      },
      errorPlacement: function(error, element) {
        error.appendTo(element.parent());
      }
    });
  });