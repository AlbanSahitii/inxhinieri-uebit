"use strict";

const movementDivWatchlist = document?.querySelector(".watch-list");
const insertMovies = function (data, status, settings) {
  if (movementDivWatchlist) {
    movementDivWatchlist.innerHTML = "";
    data.forEach(function (mov, i) {
      // mov = (object values)
      // i = index
      const html = `<ul>
                     <li>
                      <button onclick="addToWatchList(${data[i]["movie_id"]})" class="insertButton"><img src="assets/image/eye20px.png" /> </button>
                      </li>
                      <li>
                        <img src="${data[i]["movie_photo"]}" />
                      </li>
                      <li>
                       <a href="movietemplate.html">${data[i]["movie_name"]}</a>
                      </li>
                    </ul>`;
      movementDivWatchlist.insertAdjacentHTML("afterbegin", html);
    });
  }
};

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
