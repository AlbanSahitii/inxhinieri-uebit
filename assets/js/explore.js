const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const exploreDiv = document.querySelector(".explore");
const pagination = document.querySelector(".load-movies");
const watchlistButton = document.querySelector(".insertButton");

const addToWatchList = function (movieId) {
  $(document).ready(function () {
    $.ajax({
      type: "POST",
      url: "includes/exploreToWatchlist.inc.php",
      data: {
        movie_id: movieId,
        watched_status: "0",
      },
      dataType: "JSON",
      success: function (data, status) {},
      error: function (err) {
        console.log(err);
      },
    });
  });
  window.location.reload();
};

const insertMovies = function (data, status, settings) {
  if (exploreDiv) {
    //empty inside of html
    exploreDiv.innerHTML = "";
    pagination.innerHTML = "";
    // get the page parameter at url
    let page = urlParams.get("page");

    if (page === null) {
      page = 1;
    } else {
      page = Number(urlParams.get("page"));
    }

    let maxNumberOfPage = page * 10;
    let minNumberOfPage = maxNumberOfPage - 10;

    // how many movies per page
    let resultPerPage = 10;
    let numberOfResults = data.length;
    let numberOfPages = Math.ceil(numberOfResults / resultPerPage);

    // mov = (object values)
    // i = index;
    for (let i = minNumberOfPage; i < maxNumberOfPage; i++) {
      if (data[i]) {
        const html = `<ul>
                         <li>
                          <button onclick="addToWatchList(${data[i]["movie_id"]})" class="insertButton"><img src="assets/image/eye20px.png" /> </button>
                         </li>
                         <li>
                          <img src="${data[i]["movie_photo"]}" />
                         </li>
                         <li>
                          <a href="movie-page.php?movie_id=${data[i]["movie_id"]}">${data[i]["movie_name"]}</a>
                         </li>
                         </ul>
        `;
        exploreDiv.insertAdjacentHTML("afterbegin", html);
      }
    }

    for (let i = 1; i <= numberOfPages; i++) {
      const html = `<a href="explore.php?page=${i}">${i}</a>`;
      pagination.insertAdjacentHTML("beforeend", html);
    }
  }
};

// AJAX POST METHOD
$(document).ready(function () {
  $.ajax({
    type: "POST",
    url: "includes/explore.inc.php",
    success: insertMovies,
    error: function (err) {
      console.log(`${err}`);
    },
  });
});
