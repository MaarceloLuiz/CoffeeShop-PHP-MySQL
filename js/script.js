$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#e0f7fa");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#f0f0f0");
    });
});

/*
$(document).ready(function(){
    $("#home").hover(function(){
      alert("Welcome to our website!");
    }); 
});
*/

// Add click event to toggle FAQ answer visibility
$(document).ready(function () {
  $(".faq-answer").hide();
  $(".faq-question").click(function () {
      $(this).next(".faq-answer").slideToggle(500);
  });
});



$(document).ready(function() {
  $('.navbar-toggler').click(function() {
      $('#navbar').toggleClass('expanded');
  });
});

  
console.log("script.js is loaded and running!");
