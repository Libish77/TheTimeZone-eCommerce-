$( function() {
  $( "#tabs" ).tabs();
});

$(document).ready(function() {
  $('.image-popup').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      mainClass: 'mfp-img-mobile',
      image: {
          verticalFit: true
      }
  });
});