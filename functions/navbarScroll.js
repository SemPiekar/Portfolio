$(document).ready(function () {
  $(window).scroll(function () {
    var height = $(".aboutMe").height();
    var scrollTop = $(window).scrollTop();

    if (scrollTop >= height - 40) {
      $(".navContainer").addClass("solid-nav");
    } else {
      $(".navContainer").removeClass("solid-nav");
    }
  });
});
