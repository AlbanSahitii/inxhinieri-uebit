const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const movementDivWatchlist = document.querySelector(".watch-list");
const pagination = document.querySelector(".load-movies");

const insertMovies = function (data, status, settings) {
  if (movementDivWatchlist) {
    //empty inside of html
    movementDivWatchlist.innerHTML = "";
    pagination.innerHTML = "";
    // get the page parameter at url
    let page = urlParams.get("page");

    if (page === null) {
      page = 1;
    } else {
      page = Number(urlParams.get("page"));
    }

    let maxNumberOfPage = page * 5;
    let minNumberOfPage = maxNumberOfPage - 5;

    // how many movies per page
    let resultPerPage = 5;
    let numberOfResults = data.length;
    let numberOfPages = Math.ceil(numberOfResults / resultPerPage);

    // mov = (object values)
    // i = index;
    for (let i = minNumberOfPage; i < maxNumberOfPage; i++) {
      if (data[i]) {
        const html = `<ul>
          <li>
           <img src="${data[i]["movie_photo"]}" />
          </li>
          <li>
           <a href="movie-page.php?movie_id=${data[i]["movie_id"]}">${data[i]["movie_name"]}</a>
          </li>
      </ul>`;
        movementDivWatchlist.insertAdjacentHTML("afterbegin", html);
      }
    }

    for (let i = 1; i <= numberOfPages; i++) {
      const html = `<a href="profile.php?page=${i}" class="pagination_color">${i}</a>`;
      pagination.insertAdjacentHTML("beforeend", html);
    }
  }
};

$(document).ready(function () {
  $.ajax({
    type: "POST",
    url: "includes/profile.inc.php",
    success: insertMovies,
    error: function (err) {
      console.log(`${err.Message}`);
    },
  });
});
