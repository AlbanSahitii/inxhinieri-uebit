"use strict";

let date = new Date().toJSON().slice(0, 10);

const movementDivWatchlist = document?.querySelector(".watch-list");
const movementDivUpcomming = document?.querySelector(".upcomming-list");

const tempApi = [
  {
    id: 1,
    name: "Avengers: End Game",
    rating: "8.4",
    genre: "Action",
    length: 180,
    reasleseDate: new Date(`2019/03/${26 + 1}`).toJSON().slice(0, 10),
    image: "assets/image/movies/avengers.jpeg",
    description:
      "Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.",
  },
  {
    id: 2,
    name: "Spider-Man: No Way Home",
    rating: "8.3",
    genre: "Action",
    length: 150,
    reasleseDate: new Date(`2021/12/${17 + 1}`).toJSON().slice(0, 10),
    image: "assets/image/movies/spider-man.jpeg",
    description: "",
  },
  {
    id: 3,
    name: "Avatar: The Way of Water",
    rating: null,
    genre: "Fantasy",
    length: 192,
    reasleseDate: new Date(`2022/12/${16 + 1}`).toJSON().slice(0, 10),
    image: "assets/image/movies/avatar.jpeg",
    description: "",
  },
  {
    id: 4,
    name: "Winnie-the-Pooh: Blood and Honey",
    rating: null,
    genre: "Horror",
    length: 90,
    reasleseDate: new Date(`2023/02/${20 + 1}`).toJSON().slice(0, 10),
    image: "assets/image/movies/winnie-the-pooh.jpeg",
    description: "",
  },
];
const watchlistMovement = function () {
  if (movementDivWatchlist) {
    movementDivWatchlist.innerHTML = "";
    tempApi.forEach(function (mov, i) {
      if (mov.reasleseDate < date) {
        // mov = (object values)
        // i = index
        const html = `<ul>
                          <li>
                            <button class="${i}"><img src="assets/image/eye20px.png" /> </button>
                          </li>
                          <li>
                            <img src="${mov.image}" />
                          </li>
                          <li>
                            <a href="movietemplate.html">${mov.name}</a>
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
    tempApi.forEach(function (mov, i) {
      if (mov.reasleseDate > date) {
        console.log(`yes`);
        // mov = (object values)
        // i = index
        const html = `<ul>
                          <li>
                            <img src="${mov.image}" />
                          </li>
                          <li>
                            <a href="movietemplate.html">${mov.name}</a>
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
