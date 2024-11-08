// changing the text boxes color when clicking on it
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#e0f7fa");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#f0f0f0");
    });
});

// Add click event to toggle FAQ answer visibility
$(document).ready(function () {
  $(".faq-answer").hide();
  $(".faq-question").click(function () {
      $(this).next(".faq-answer").slideToggle(500);
  });
});

// making the navbar darker when clicking on the menu btn
$(document).ready(function() {
  $('.navbar-toggler').click(function() {
      $('#navbar').toggleClass('expanded');
  });
});
