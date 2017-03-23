jQuery(document).ready(function($){
  // toggle mobile nav
  $(".menu-icon").on("click", function(){
    $("nav.main").slideToggle();
    $(this).toggleClass("active");
  });
});
