const SPREADSHEET_ID = "1xI1JU96y4FPuAjm5aXoc5iQoQ0If2HZ6yeUI_LBhL0E";
const API_BASE_URL = "https://sheets.googleapis.com/v4/spreadsheets/";
const HOURS_SHEET = "Fall%202024"; // Note that %20 is the URL encoding for a space (" ")
const HOURS_OPTIONS = "/values/" + HOURS_SHEET + "!B3:G10?key=";
const SPECIAL_TAIL = "%20-%20Special%20Hours%20(for%20Bot%20purposes)";
const SPECIAL_SHEET = HOURS_SHEET + SPECIAL_TAIL;
const SPECIAL_OPTIONS = "/values/" + SPECIAL_SHEET + "!B3:G10?key=";
const ABILITIES_OPTIONS = "/values/Abilities!A2:C?key=";
// API_KEY provided in separate file key.js so that we don't have to push
// it to GitHub

const abilities = $.ajax({
  // eslint-disable-next-line
  url: API_BASE_URL + SPREADSHEET_ID + ABILITIES_OPTIONS + API_KEY,
  type: "GET",
});
const hours = $.ajax({
  // eslint-disable-next-line
  url: API_BASE_URL + SPREADSHEET_ID + HOURS_OPTIONS + API_KEY,
  type: "GET",
});
const special = $.ajax({
  // eslint-disable-next-line
  url: API_BASE_URL + SPREADSHEET_ID + SPECIAL_OPTIONS + API_KEY,
  type: "GET",
});

$.when(abilities, hours, special).then(function (
  abilitiesRes,
  hoursRes,
  specialRes
) {
  const abilitiesVal = abilitiesRes[0].values;
  const hoursVal = hoursRes[0].values;
  const specialVal = specialRes[0].values;

  // Assemble abilities object
  let classes = {};
  let checkoffs = {};
  abilitiesVal.forEach((row) => {
    classes[row[0]] =
      row[1] === undefined || row[1].trim() === ""
        ? []
        : row[1].split("\n").map((c) => c.trim());
    checkoffs[row[0]] =
      row[2] === undefined || row[2].trim() === ""
        ? []
        : row[2].split("\n").map((c) => c.trim());
  });

  const cells = $(".table1 tr td:not(#time)>.flex-wrapper");
  let i = 0;
  for (let j = 0; j < 8; j++) {
    for (let k = 0; k < 6; k++) {
      if (hoursVal[j][k] === undefined) {
        hoursVal[j][k] = " ";
      }

      const mystring = hoursVal[j][k];
      const people = mystring
        .split("\n")
        .map((p) => p.trim())
        .sort();
      hoursVal[j][k] = people.join("<br>");

      let tooltip = "";
      if (hoursVal[j][k] !== "Check Discord") {
        // Assemble sets of abilities
        let cellClasses = [];
        let cellCheckoffs = [];
        for (const officer of people) {
          cellClasses = classes[officer]
            ? cellClasses.concat(classes[officer])
            : cellClasses;
          cellCheckoffs = checkoffs[officer]
            ? cellCheckoffs.concat(checkoffs[officer])
            : cellCheckoffs;
        }
        cellClasses = new Array(...new Set(cellClasses)).sort().join("<br>");
        cellCheckoffs = new Array(...new Set(cellCheckoffs)).join("<br>");

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
        </span>`;
      }
      // Add special lab hour class to cell, if there is one
      try {
        $(cells[i]).parent().addClass(specialVal[j][k].toLowerCase());
      } catch {
        // If there's an error, the cell doesn't have a special hour, so we skip
        // it
      }
      // Add officers and tooltip to cell
      $(cells[i]).append(hoursVal[j][k] + tooltip);
      i++;
    }
  } // end of code for first table
});
