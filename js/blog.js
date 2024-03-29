$(document).ready(function() {
  // Initialize Typed.js for the typing effect
  var typed = new Typed('.typed-text', {
    strings: ["Welcome to TheTimeZone Blog!", "Discover the latest luxury watches.", "Explore our insightful articles."],
    typeSpeed: 50, // Typing speed in milliseconds
    backSpeed: 30, // Backspacing speed in milliseconds
    loop: true // Loop the animation
  });

  // Magnific Popup initialization for image links
  $('.image-link').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true
    }
  });

});
