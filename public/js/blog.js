$(() => {
  const API_BASE_URL = 'https://sheets.googleapis.com/v4/spreadsheets/'
  const API_OPTIONS = '/values/Form%20Responses%201!A2:E?key='
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

      if (title.length) title = `<h2 class="title">${title}</h2>`
      if (!title.length && body.length <= 144) body = `<h2>${body}</h2>`
      else body = `<p>${body}</p>`

      let post = `<div class="post container-fluid">
                            ${title}
                            ${body}
                            <div class="info">
                                <p class="name ieee-blue">${name}</p>
                                <p class="position">${position}</p>
                                <p class="date">${date}</p>
                            </div>
                        </div>`

      $('.blog-wrapper').append(post)
    })
  })
})
