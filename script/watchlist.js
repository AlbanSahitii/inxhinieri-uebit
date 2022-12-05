"use strict";

let date = new Date().toJSON().slice(0, 10);

const movementDivWatchlist = document?.querySelector(".watch-list");
const movementDivUpcomming = document?.querySelector(".upcomming-list");

const tempObjApi = {
  1: {
    id: 1,
    name: "Avengers: End Game",
    rating: "8.4",
    genre: "Action",
    length: 180,
    reasleseDate: new Date(`2019/03/${26 + 1}`).toJSON().slice(0, 10),
    image: "images/movies/avengers.jpeg",
  },
  2: {
    id: 2,
    name: "Spider-Man: No Way Home",
    rating: "8.3",
    genre: "Action",
    length: 150,
    reasleseDate: new Date(`2021/12/${17 + 1}`).toJSON().slice(0, 10),
    image: "images/movies/spider-man.jpeg",
  },
  3: {
    id: 3,
    name: "Avatar: The Way of Water",
    rating: null,
    genre: "Fantasy",
    length: 192,
    reasleseDate: new Date(`2022/12/${16 + 1}`).toJSON().slice(0, 10),
    image: "images/movies/avatar.jpeg",
  },
  4: {
    id: 4,
    name: "Winnie-the-Pooh: Blood and Honey",
    rating: null,
    genre: "Horror",
    length: 90,
    reasleseDate: new Date(`2023/02/${15 + 1}`).toJSON().slice(0, 10),
    image: "images/movies/winnie-the-pooh.jpeg",
  },
};
const objectValues = Object.values(tempObjApi);

const watchlistMovement = function () {
  if (movementDivWatchlist) {
    movementDivWatchlist.innerHTML = "";
    objectValues.forEach(function (mov, i) {
      if (mov.reasleseDate < date) {
        // mov = (object values)
        // i = index
        const html = `<ul>
  <li>
    <a href="#"><img src="images/eye20px.png" /> </a>
  </li>
  <li>
    <img src="${mov.image}" />
  </li>
  <li>
    <a href="#">${mov.name}</a>
  </li>
</ul>
`;
        movementDivWatchlist.insertAdjacentHTML("afterbegin", html);
      }
    });
  }
};

const upcomminglistMov = function () {
  if (movementDivUpcomming) {
    movementDivUpcomming.innerHTML = "";
    objectValues.forEach(function (mov, i) {
      if (mov.reasleseDate > date) {
        // mov = (object values)
        // i = index
        const html = `<ul>
    <li>
      <img src="${mov.image}" />
    </li>
    <li>
      <a href="#">${mov.name}</a>
    </li>
    <li>
    <span> Realese Date : ${mov.reasleseDate} </span>
    </li>
  </ul>
  `;
        movementDivUpcomming.insertAdjacentHTML("afterbegin", html);
      }
    });
  }
};

watchlistMovement();
upcomminglistMov();
// //
