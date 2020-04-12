$(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-home");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});