$(document).ready(function() {
  // function fired whenever window scrolls
  $(window).scroll(function() {
    // if window scrolled more than 75px
    if ($(document).scrollTop() > 75) {
      $('.myNavbar').css('background-color', 'rgba(51, 122, 183, 0.9)')
    } else {
      $('.myNavbar').css('background-color', 'transparent')
    }
  })
})
