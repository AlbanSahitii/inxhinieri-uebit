<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Index</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <header>
      <nav id="home_navbar">
        <div id="home_navbar_logo">
          <img src="assets/image/tvtime-logo.jpeg" alt="" />
          <p>Movie Time</p>
        </div>
        <div id="home_navbar_open_phone">
          <div onclick="openNav()"></div>
        </div>
        <div id="home_navbar_items_phone">
          <a href="javascript:void(0)" onclick="closeNav()"
            ><svg xmlns="http://www.w3.org/2000/svg">
              <path
                d="m12.45 37.95-2.4-2.4L21.6 24 10.05 12.45l2.4-2.4L24 21.6l11.55-11.55 2.4 2.4L26.4 24l11.55 11.55-2.4 2.4L24 26.4Z"
              /></svg
          ></a>
          <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="sign-up.php">Sign Up</a></li>
          </ul>
        </div>
        <div id="home_navbar_items">
          <ul>
            <li id="login_link"><a href="login.php">Login</a></li>
            <li id="sign_up_link"><a href="sign-up.php">Sign Up</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <div id="home_main_up">
        <div id="home_main_up_container">
          <div id="home_main_up_image">
              <img name="myHomeSlide" id="home_up_slideshow" />
          </div>
          <div id="home_main_up_text">
            <h1>Track your movies and get notified when new ones come out</h1>
            <p>Login and upgrade your watch list</p>
          </div>
        </div>
      </div>
      <div id="home_main_down">
        <div id="home_main_down_container">
          <div id="home_main_down_image">
            <img src="assets/image/phone_image_second.png" alt="" />
          </div>
          <div id="home_main_down_text">
            <div id="home_main_down_text_title">
              <h2>Let Move Time be your guide</h2>
              <hr />
              <p>
                So much to watch means so many questions. Join 23+ million users
                and:
              </p>
            </div>
            <div id="home_main_down_text_content">
              <div>
                <img src="assets/image/organize.avif" alt="" />
                <p><span>Track</span> shows and movies you love</p>
              </div>
              <div>
                <img src="assets/image/recommendation.avif" alt="" />
                <p><span>Discover</span> what to watch next</p>
              </div>
              <div>
                <img src="assets/image/notifications.avif" alt="" />
                <p><span>Get notified</span> when it's available</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div id="home_footer_links">
        <ul>
          <li><a href="">About Us</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>
      <div id="home_footer_sc">
        <a href=""></a>
        <a href=""></a>
        <a href=""></a>
      </div>
      <div id="home_footer_copyright">
        <p>© 2022, TV Time, a Whip Media Company</p>
      </div>
    </footer>
    <script src="assets/js/home.js"></script>
  </body>
</html>
