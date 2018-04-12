$(document).ready(function() {
  let bool = false
  $('.glyphicon').click(function() {
    if (bool == false) {
      $(this).toggleClass('rotated')
      $(this)
        .parent()
        .parent()
        .next()
        .css('display', 'block')
      bool = true
    } else {
      $(this).toggleClass('rotated')
      $(this)
        .parent()
        .parent()
        .next()
        .css('display', 'none')
      bool = false
    }
  })
})
