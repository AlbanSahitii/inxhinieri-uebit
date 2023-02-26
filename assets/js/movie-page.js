"use strict";
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

const movie_id = urlParams.get("movie_id");
let movieName = document.querySelector("#movie_page_up_name");
let movieTime = document.querySelector("#movie_page_down_stats_length");
let movieDate = document.querySelector("#movie_page_down_stats_released");
let movieImg = document.querySelector("#movie_page_up_thumbnail");
let movieDescription = document.querySelector(
  "#movie_page_description_container"
);

$(document).ready(function () {
  $.ajax({
    type: "POST",
    url: "includes/movie-page.inc.php",
    data: {
      movie_id: movie_id,
    },
    success: function (data) {
      movieTime.innerHTML = data[0]["movie_time"];
      movieName.innerHTML = `<h1>${data[0]["movie_name"]}</h1>`;
      movieDate.innerHTML = `Realese Date : ${data[0]["release_date"]}`;
      movieDescription.innerHTML = `<h2>Description</h2>
                                      <p>${data[0]["movie_description"]}</p>`;
      movieImg.innerHTML = `<img src="${data[0]["movie_photo"]}" alt="">`;
    },
    error: function (err) {
      console.log(`${err}`);
    },
  });
});
