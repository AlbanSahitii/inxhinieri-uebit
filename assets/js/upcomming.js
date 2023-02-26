"use strict";

const movementDivUpcomming = document?.querySelector(".upcomming-list");

const insertMovies = function (data, status, settings) {
  if (movementDivUpcomming) {
    movementDivUpcomming.innerHTML = "";
    data.forEach(function (mov, i) {
      // mov = (object values)
      // i = index
      const html = `<ul>
                      <li>
                        <img src="${data[i]["movie_photo"]}" />
                      </li>
                      <li>
                        <a href="movie-page.php">${data[i]["movie_name"]}</a>
                      </li>
                      <li>
                        <span> Realese Date : ${data[i]["release_date"]} </span>
                      </li> 
                    </ul>
        `;
      movementDivUpcomming.insertAdjacentHTML("afterbegin", html);
    });
  }
};

// AJAX POST METHOD
$(document).ready(function () {
  $.ajax({
    type: "POST",
    url: "includes/upcomming.inc.php",
    success: insertMovies,
    error: function (err) {
      console.log(`${err}`);
    },
  });
});
