$(() => {
  const API_BASE_URL = "https://sheets.googleapis.com/v4/spreadsheets/";
  const API_OPTIONS = "/values/Spring%20Qtr%2023!A2:L?key=";
  const SPREADSHEET_ID = "138-osM3nyNM88QTvcDz4YNgX5TwJRfqcoi2u8UoJvAg";

  // eslint-disable-next-line
  $.ajax({
    method: "GET",
    // API_KEY provided in separate file
    // eslint-disable-next-line no-undef
    url: API_BASE_URL + SPREADSHEET_ID + API_OPTIONS + API_KEY,
  }).then((res) => {
    // Filter out all the events that have passed, or have "No" in the
    // "Put no Newsletter" field
    const events = res.values.filter((event) => {
      const eventDate = new Date(event[3]);
      return eventDate > Date.now() && event[9] !== "No";
    });

    // Sort remaining events by start time so we don't depend on the calendar
    // spreadsheet being sorted
    events.sort(function (a, b) {
      const aDate = new Date(a[3]);
      const bDate = new Date(b[3]);
      return aDate > bDate ? 1 : aDate < bDate ? -1 : 0;
    });

    // If no events to show, display message
    // Else, format the first three events and display them
    if (events.length === 0) {
      const emptyMessage = `<div class='col-md-9 text-center empty-message'>
        <h1>There are currently no events listed</h1>
      </div>`;

      $(".events-slider").append(emptyMessage);
    } else {
      events.forEach((event) => {
        // Display the location, otherwise say "TBD"
        const location = event[5] ? event[5] : "TBD";

        // Display a link if given one
        const link = event[11] ? `<a href="${event[11]}">(link)</a>` : "";

        // Parse start time from start column
        // Assumes format of "... XX:XX" in 24-hour time
        const timeRegex = /([0-9]{2}:[0-9]{2})$/;
        const startTime = event[3].match(timeRegex)[0];

        const eventCard = `<div class='event-card'>
            <h3>${event[1]}</h3> <br />
            <h4>
                ${location} ${link} <br />
                ${event[2]} <br />
                Starts at ${startTime} PST
            </h4>
        </div>`;

        $(".events-slider").append(eventCard);
      });
    }
  });
});
