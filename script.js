$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "brown");
    });
    $("input").blur(function(){
        $(this).css("background-color", "grey");
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
$(document).ready(function() {
    $(".faq-question").click(function() {
      $(this).next(".faq-answer").toggleClass("show");
    });
  });
  