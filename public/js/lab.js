const SPREADSHEET_ID = '1YLaaSEy0RsXwlboPSnK-3G-Vd901aoP4d5TyJMu-Tvo'
const API_BASE_URL = 'https://sheets.googleapis.com/v4/spreadsheets/'
const API_OPTIONS = '/values/Fall%202020!B3:G10?key='
// API_KEY provided in separate file key.js so that we don't have to push
// it to GitHub

$.ajax({
  // eslint-disable-next-line
  url: API_BASE_URL + SPREADSHEET_ID + API_OPTIONS + API_KEY,
  type: 'GET'
}).then(function(res) {
  let cells = $('.table1 tr td:not(#time)')
  let i = 0
  for (let j = 0; j < 8; j++) {
    for (let k = 0; k < 6; k++) {
      if (res.values[j][k] === undefined) {
        res.values[j][k] = ' '
      }

      var mystring = res.values[j][k]
      res.values[j][k] = mystring.split('\n').join('<br>')
      cells[i].innerHTML = res.values[j][k]
      i++
    }
  } // end of code for first table
})
