const SPREADSHEET_ID = '1YLaaSEy0RsXwlboPSnK-3G-Vd901aoP4d5TyJMu-Tvo'
const API_BASE_URL = 'https://sheets.googleapis.com/v4/spreadsheets/'
const HOURS_OPTIONS = '/values/Spring%202021!B3:G8?key='
const ABILITIES_OPTIONS = '/values/Abilities!A2:C?key='
// API_KEY provided in separate file key.js so that we don't have to push
// it to GitHub

let hours = $.ajax({
  // eslint-disable-next-line
  url: API_BASE_URL + SPREADSHEET_ID + HOURS_OPTIONS + API_KEY,
  type: 'GET'
})
let abilities = $.ajax({
  // eslint-disable-next-line
  url: API_BASE_URL + SPREADSHEET_ID + ABILITIES_OPTIONS + API_KEY,
  type: 'GET'
})

$.when(abilities, hours).then(function(res1, res2) {
  let val1 = res1[0].values
  let val2 = res2[0].values

  // Assemble abilities object
  classes = {}
  checkoffs = {}
  val1.forEach(row => {
    classes[row[0]] = row[1] === undefined || row[1].trim() === '' ? [] : row[1].split('\n').map(c => c.trim())
    checkoffs[row[0]] = row[2] === undefined || row[2].trim() === '' ? [] : row[2].split('\n').map(c => c.trim())
  })

  let cells = $('.table1 tr td:not(#time)>.flex-wrapper')
  let i = 0
  for (let j = 0; j < 8; j++) {
    for (let k = 0; k < 6; k++) {
      if (val2[j][k] === undefined) {
        val2[j][k] = ' '
      }

      let mystring = val2[j][k]
      let people = mystring
        .split('\n')
        .map(p => p.trim())
        .sort()
      val2[j][k] = people.join('<br>')

      let tooltip = ''
      if (val2[j][k] !== 'Check Discord') {
        // Assemble sets of abilities
        let cellClasses = []
        let cellCheckoffs = []
        for (const officer of people) {
          cellClasses = classes[officer] ? cellClasses.concat(classes[officer]) : cellClasses
          cellCheckoffs = checkoffs[officer] ? cellCheckoffs.concat(checkoffs[officer]) : cellCheckoffs
        }
        cellClasses = new Array(...new Set(cellClasses)).sort().join('<br>')
        cellCheckoffs = new Array(...new Set(cellCheckoffs)).join('<br>')

        tooltip = `<span class='abilities' data-col='${k}'>
          <div class='inner-wrapper'>
            <span class='classes'>
              <p>Classes</p>
              <div>
                ${cellClasses}
              </div>
            </span>
            <span class='checkoffs'>
              <p>Checkoffs/Help</p>
              <div>
                ${cellCheckoffs}
              </div>
            </span>
          </div>
        </span>`
      }

      $(cells[i]).append(val2[j][k] + tooltip)
      i++
    }
  } // end of code for first table
})
