$(() => {
  // eslint-disable-next-line
  const API_URL = `https://api.flickr.com/services/rest/?method=flickr.people.getPhotos&api_key=${FLICKR_API_KEY}&user_id=133667364@N02&format=json&per_page=8&nojsoncallback=1`

  $.ajax({ method: 'GET', url: API_URL }).then(res => {
    let components = res.photos.photo.map(data => {
      return `<img src='https://farm${data.farm}.staticflickr.com/${data.server}/${data.id}_${data.secret}_q.jpg' />`
    })

    for (let component of components) {
      $('.image-list').append(component)
    }
  })

  const API_BASE_URL = 'https://sheets.googleapis.com/v4/spreadsheets/'
  const API_OPTIONS = '/values/Main!A100:G?key='
  const SPREADSHEET_ID = '1TrqADzDxLP1jbQ0Rxaho378eyph2LytErtMiMoXxvtY'

  // eslint-disable-next-line
  $.ajax({ method: 'GET', url: API_BASE_URL + SPREADSHEET_ID + API_OPTIONS + API_KEY }).then(res => {
    let events = res.values.filter(event => {
      let eventDate = new Date(event[2])
      return eventDate > Date.now()
    })

    const EVENTS_TO_SHOW = 3
    events = events.map(event => {
      return `<div class='col-md-3 columns-spacing'>
        <h3>${event[1]}</h3> <br />
        <h4>
          ${event[5]} <br />
          ${event[2]} <br />
          ${event[4]}
        </h4>
      </div>`
    })

    for (let k = 0; k < EVENTS_TO_SHOW; k++) {
      $('.events').append(events[k])
    }
  })
})
