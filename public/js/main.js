$(() => {
  // eslint-disable-next-line
  const API_URL = `https://api.flickr.com/services/rest/?method=flickr.people.getPhotos&api_key=${FLICKR_API_KEY}&user_id=133667364@N02&format=json&per_page=8&nojsoncallback=1`

  $.ajax({ method: 'GET', url: API_URL }).then(res => {
    let components = res.photos.photo.map(data => {
      return `<a href='https://www.flickr.com/photos/ieeebruins' target='_blank'>
        <img src='https://farm${data.farm}.staticflickr.com/${data.server}/${data.id}_${data.secret}_q.jpg' />
      </a>`
    })

    for (let component of components) {
      $('.image-list').append(component)
    }
  })

  const API_BASE_URL = 'https://sheets.googleapis.com/v4/spreadsheets/'
  const API_OPTIONS = '/values/Winter%20Qtr%2022!A2:L?key='
  const SPREADSHEET_ID = '138-osM3nyNM88QTvcDz4YNgX5TwJRfqcoi2u8UoJvAg'

  // eslint-disable-next-line
  $.ajax({
    method: 'GET',
    url: API_BASE_URL + SPREADSHEET_ID + API_OPTIONS + API_KEY
  }).then(res => {
    // Filter out all the events that have passed, or have "No" in the
    // "Put no Newsletter" field
    let events = res.values.filter(event => {
      let eventDate = new Date(event[3])
      return eventDate > Date.now() && event[9] !== 'No'
    })

    // Sort remaining events by start time so we don't depend on the calendar
    // spreadsheet being sorted
    events.sort(function(a, b) {
      aDate = new Date(a[3])
      bDate = new Date(b[3])
      return aDate > bDate ? 1 : aDate < bDate ? -1 : 0
    })

    // If no events to show, display message
    // Else, format the first three events and display them
    if (events.length === 0) {
      let emptyMessage = `<div class='col-md-9 text-center empty-message'>
        <h1>There are currently no events listed</h1>
      </div>`

      $('.events-slider').append(emptyMessage)
    } else {
      events.forEach(event => {
        // Display a link if given one
        let link = event[11] ? `<a href="${event[11]}">(link)</a>` : ''

        // Parse start time from start column
        // Assumes format of "... XX:XX" in 24-hour time
        let timeRegex = /([0-9]{2}:[0-9]{2})$/
        let startTime = event[3].match(timeRegex)[0]

        let eventCard = `<div class='event-card'>
            <h3>${event[1]}</h3> <br />
            <h4>
                ${event[5]} ${link} <br />
                ${event[2]} <br />
                Starts at ${startTime} PST
            </h4>
        </div>`

        $('.events-slider').append(eventCard)
      })
    }
  })
})
