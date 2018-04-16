console.log('hello world')

let API_KEY = 'AIzaSyDJGe2qaZRFN1xE3ocf20HiG0sJh9rLC_4'
let SPREADSHEET_ID = '1pYy3YIyndz-xe2BTZQxWkEPFuxomc7lJTKdm988trOA'

$.ajax({
  url:
    'https://sheets.googleapis.com/v4/spreadsheets/' + SPREADSHEET_ID + '/values/Spring%202018!A1:G13?key=' + API_KEY,
  type: 'GET'
}).then(function(res) {
  console.log(res)
  console.log($('.table1 tr td'))
  console.log($('.table2 tr td'))

  let cells = $('.table1 tr td')
  let cells2 = $('.table2 tr td')
  let headerCells = $('.table2 tr th')

  let i = 1
  for (let j = 1; j < 13; j++) {
    for (let k = 1; k < 7; k++) {
      if (res.values[j][k] == undefined) {
        res.values[j][k] = ' '
      }

      var mystring = res.values[j][k]
      res.values[j][k] = mystring.split('\n').join('<br>')
      cells[i].innerHTML = res.values[j][k]
      i++
    }
    i++
  } //end of code for first table

  var date = new Date()
  var n = date.getDay()
  let day1 = n
  //0 = Sunday, 1 = Monday, 6 = Saturday
  let day2 = n + 1
  if (day1 == 0 || day1 == 6) {
    day1 = 6 //Sunday and Saturday are both column 6
    day2 = 1 //the next day, Monday, is column 1
  }
  let d = 1 //tracks cells in table
  let d2 = 2
  for (let a = 1; a < 13; a++) {
    if (res.values[a][day1] == undefined) {
      res.values[a][day1] = ' '
    }
    if (res.values[a][day2] == undefined) {
      res.values[a][day2] = ' '
    }
    cells2[d].innerHTML = res.values[a][day1]
    cells2[d2].innerHTML = res.values[a][day2]
    d += 3
    d2 += 3
  } //end of code for table2

  //header for day 1 and day 2
  if (day1 == 0 || day1 == 6) {
    headerCells[1].innerHTML = 'SAT / SUN'
    headerCells[2].innerHTML = 'MONDAY'
  }
  if (day1 == 1) {
    headerCells[1].innerHTML = 'MONDAY'
    headerCells[2].innerHTML = 'TUESDAY'
  }
  if (day1 == 2) {
    headerCells[1].innerHTML = 'TUESDAY'
    headerCells[2].innerHTML = 'WEDNESDAY'
  }
  if (day1 == 3) {
    headerCells[1].innerHTML = 'WEDNESDAY'
    headerCells[2].innerHTML = 'THURSDAY'
  }
  if (day1 == 4) {
    headerCells[1].innerHTML = 'THURSDAY'
    headerCells[2].innerHTML = 'FRIDAY'
  }
  if (day1 == 5) {
    headerCells[1].innerHTML = 'FRIDAY'
    headerCells[2].innerHTML = 'SAT/SUN'
  }
})
