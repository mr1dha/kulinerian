$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-home");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

  $('.navbar-toggler-icon').on('click', function(){
  	if($(document).scrollTop() < $(this).height()){
  		$(".navbar-home").toggleClass('scrolled');
  	}
  });