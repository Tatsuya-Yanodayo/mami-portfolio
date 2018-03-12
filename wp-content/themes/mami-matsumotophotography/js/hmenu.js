jQuery(function () {
  var $header = jQuery('#top-head');
  // Nav Fixed
  jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() > 350) {
      $header.addClass('fixed');
    } else {
      $header.removeClass('fixed');
    }
  });
  // Nav Toggle Button
  jQuery('#nav-toggle').click(function () {
    $header.toggleClass('open');
  });
});