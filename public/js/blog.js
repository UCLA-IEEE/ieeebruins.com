$(() => {
  const API_BASE_URL = 'https://sheets.googleapis.com/v4/spreadsheets/'
  // Detects if being used on main.php
  if (window.location.pathname === '/') var main = true
  else var main = false
  // Only gets 2 most recent posts for main page
  if (main) var API_OPTIONS = '/values/Approved%20Posts!A2:F3?key='
  else var API_OPTIONS = '/values/Approved%20Posts!A2:F?key='
  const SPREADSHEET_ID = '1vuWL6fZ0XO9VDN9wUeFn_3jrMO3hQL9goO2oaeT--pI'

  // eslint-disable-next-line
  $.ajax({
    method: 'GET',
    url: API_BASE_URL + SPREADSHEET_ID + API_OPTIONS + API_KEY
  }).then(res => {
    let values = res.values
    values.forEach(e => {
      let dateRegex = /^[0-9]+\/[0-9]+\/[0-9]{4}/
      let date = e[0].match(dateRegex)[0]
      let name = e[1]
      let position = e[2]
      let title = e[3]
      let body = e[4].split('\n').join('<br>')
      let pic = e[5]

      if (title.length) title = `<h2 class="title">${title}</h2>`
      if (!title.length && body.length <= 144) body = `<h2>${body}</h2>`
      else body = `<p>${body}</p>`

      if (pic) pic = `<img src="${pic.split('/open?').join('/uc?')}">`
      else pic = ''

      // Put picture before body on posts with a title
      if (title.length) var content = title + pic + body
      else var content = body + pic

      let post = `<div class="post-fade">
                            ${content}
                      </div>
                            <div class="info">
                                <p class="name ieee-blue">${name}</p>
                                <p class="position">${position}</p>
                                <p class="date">${date}</p>
                            </div>`

      // Wrap posts in a link to the blog page on landing page
      if (main) post = `<a class="post" href="/blog">${post}</a>`
      else post = `<div class="post container-fluid">${post}</div>`

      $('.blog-wrapper').append(post)
    })

    // Set up image modal
    $('.post img').click(function() {
      let pic = $(this)
        .clone()
        .wrap('<div></div>')
      // Only want to exit modal when clicking off of image
      pic.click(e => e.stopPropagation())
      $('.img-modal')
        .append(pic)
        .css('display', 'flex')
        .hide()
        .fadeIn('fast')
    })

    $('.img-modal').click(function() {
      $(this).fadeOut('fast', function() {
        $(this).empty()
      })
    })
  })
})
