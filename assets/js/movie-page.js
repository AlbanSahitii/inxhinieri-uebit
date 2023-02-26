"use strict";

$(document).ready(function () {
  $.ajax({
    type: "POST",
    url: "includes/watchlist.inc.php",
    success: insertMovies,
    error: function (err) {
      console.log(`${err}`);
    },
  });
});
