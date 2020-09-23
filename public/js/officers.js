$(() => {
  // Show modal on clicking an officer
  $('.officer').click(function() {
    // Get officer info
    const officer = $(this)
    const year = officer.attr('data-class')
    const major = officer.attr('data-major')
    const description = officer.attr('data-description')
    const link = officer.attr('data-link')

    // Load info into modal
    $('.officer-overlay .year').html(year)
    $('.officer-overlay .major').html(major)
    $('.officer-overlay .description').html(description)
    $('.officer-overlay a').attr('href', link)

    // Vertically center modal
    const modalHeight = $('.officer-overlay').height()
    $('.officer-overlay').css({ top: `calc(50vh - (${modalHeight}px/2)` })

    // Display modal
    $('.modal-background').fadeIn('fast')
    $('.officer-overlay').fadeIn('fast')
    return false
  })

  // Hide all modals on clicking anywhere outside a modal
  $('.modal-background').click(function() {
    $('.officer-overlay').fadeOut('fast')
    $('.modal-background').fadeOut('fast')
  })
})
