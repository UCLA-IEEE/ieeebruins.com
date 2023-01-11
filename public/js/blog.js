$(() => {
  const API_BASE_URL = "https://sheets.googleapis.com/v4/spreadsheets/";
  // Detects if being used on main.php
  const main = window.location.pathname === "/";
  // Only gets 2 most recent posts for main page
  const API_OPTIONS = main
    ? "/values/Approved%20Posts!A2:F3?key="
    : "/values/Approved%20Posts!A2:F?key=";
  const SPREADSHEET_ID = "1vuWL6fZ0XO9VDN9wUeFn_3jrMO3hQL9goO2oaeT--pI";

  // eslint-disable-next-line
  $.ajax({
    method: "GET",
    // API_KEY provided in separate file
    // eslint-disable-next-line no-undef
    url: API_BASE_URL + SPREADSHEET_ID + API_OPTIONS + API_KEY,
  }).then((res) => {
    const values = res.values;
    values.forEach((e) => {
      const dateRegex = /^[0-9]+\/[0-9]+\/[0-9]{4}/;
      const date = e[0].match(dateRegex)[0];
      const name = e[1];
      const position = e[2];
      let title = e[3];
      let body = e[4].split("\n").join("<br>");
      let pic = e[5];

      if (title.length) title = `<h2 class="title">${title}</h2>`;
      if (!title.length && body.length <= 144) body = `<h2>${body}</h2>`;
      else body = `<p>${body}</p>`;

      if (pic) pic = `<img src="${pic.split("/open?").join("/uc?")}">`;
      else pic = "";

      // Put picture before body on posts with a title
      const content = title.length ? title + pic + body : body + pic;

      let post = `<div class="post-fade">
                            ${content}
                      </div>
                            <div class="info">
                                <p class="name ieee-blue">${name}</p>
                                <p class="position">${position}</p>
                                <p class="date">${date}</p>
                            </div>`;

      // Wrap posts in a link to the blog page on landing page
      if (main) post = `<a class="post" href="/blog">${post}</a>`;
      else post = `<div class="post container-fluid">${post}</div>`;

      $(".blog-wrapper").append(post);
    });

    // Set up image modal
    $(".post img").click(function () {
      const pic = $(this).clone().wrap("<div></div>");
      // Only want to exit modal when clicking off of image
      pic.click((e) => e.stopPropagation());
      $(".img-modal").append(pic).css("display", "flex").hide().fadeIn("fast");
    });

    $(".img-modal").click(function () {
      $(this).fadeOut("fast", function () {
        $(this).empty();
      });
    });
  });
});
