$(document).ready(function() {
  $("#registration-form").validate({
    rules: {
      firstname: {
        required: true,
        minlength: 2
      },
      lastname: {
        required: true,
        minlength: 2
      },
      username: {
        required: true,
        minlength: 4
      },
      password: {
        required: true,
        minlength: 8
      },
      confirmPassword: {
        required: true,
        equalTo: "#password"
      }
    },
    messages: {
      firstname: {
        required: "Please enter your first name",
        minlength: "Your first name must be at least 2 characters long"
      },
      lastname: {
        required: "Please enter your last name",
        minlength: "Your last name must be at least 2 characters long"
      },
      username: {
        required: "Please enter a username",
        minlength: "Your username must be at least 4 characters long"
      },
      password: {
        required: "Please enter a password",
        minlength: "Your password must be at least 8 characters long"
      },
      confirmPassword: {
        required: "Please confirm your password",
        equalTo: "Your passwords do not match"
      }
    }
  });
});
