
$(document).ready(function () {
// a function to hide and show menu when hamburger button is clicked

  $(".hamburger-menu").click(function () {
    $(".header-second").toggleClass("show");
  });

   // get a username
   let userName = "";
  $.get("/thetimezone/php/getUserName.php", function (data) {
    debugger;
    let userInfo = JSON.parse(data);
    userName = userInfo;
    
    // Update the placeholder element with the username and redirection in usericon
    if(userInfo != ""){
      $(".username").text("Welcome, " + userInfo);

    }
    else{
      $(".username").text("");
    }
    
    // user icon redirection (redirect whether to login page or userprofile)

    $(".userIcon").on('click', function(){
      if(userName != ""){
        window.location.href = `/thetimezone/php/userprofile.php`;
      }
      else{
        window.location.href = `/thetimezone/html/login.html`;
      }
    })

    //show or hide the logout button
    if(userName != ""){
      $('.logout').show();
    }else {
      $('.logout').hide();
    }
  });
})