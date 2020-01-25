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
  const API_OPTIONS = '/values/Winter!A3:I?key='
  const SPREADSHEET_ID = '19eixWfc2iZl5JbjN2JqfQxr1KIkt-bDJm7NZrAg6NBM'

  // eslint-disable-next-line
  $.ajax({
    method: 'GET',
    url: API_BASE_URL + SPREADSHEET_ID + API_OPTIONS + API_KEY
  }).then(res => {
    // Filter out all the events that have passed, or have "No" in the
    // "Put no Newsletter" field
    let events = res.values.filter(event => {
      let eventDate = new Date(event[2])
      return eventDate > Date.now() && event[7] !== 'No'
    })

    // If no events to show, display mesage
    // Else, format the first three events and display them
    if (events.length === 0) {
      let emptyMessage = `<div class='col-md-9 text-center empty-message'>
        <h1>There are currently no events listed</h1>
      </div>`

      $('.events').append(emptyMessage)
    } else {
      const EVENTS_TO_SHOW = 3
      events = events.map(event => {
        return `<div class='col-md-3 columns-spacing'>
          <h3>${event[1]}</h3> <br />
          <h4>
            ${event[5]} <br />
            ${event[2]} <br />
            ${event[3]}
          </h4>
        </div>`
      })

      for (let k = 0; k < EVENTS_TO_SHOW; k++) {
        $('.events').append(events[k])
      }
    }
  })
})
