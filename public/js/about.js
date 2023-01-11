$(document).ready(function () {
  const NUM_YEARS_SHOWN = 3;
  // Initially hide awards after year 3
  $(".year").slice(NUM_YEARS_SHOWN).slideToggle(0);

  // Toggle the show more / show less functionality
  $(".show-more").click(function () {
    $(".year").slice(NUM_YEARS_SHOWN).slideToggle(400);

    const text = $(".show-more").text();
    if (text === "show more") {
      $(".show-more").text("show less");
    } else {
      $(".show-more").text("show more");
    }
  });

  // Rotate glyphycon and slide down corresponding
  // awards list then the year is clicked
  $(".year").click(function () {
    $(this).find(".glyphicon").toggleClass("rotated");

    $(this).next().slideToggle(200);
  });
});
