<?php
session_start();
if (!isset($_SESSION['user_id'])){
  header("Location: ./login.php");
}

echo '<div class="left-container">

<div class="logo">
          <a href="#"><img src="assets/image/logo.png" alt="logo" /></a>
        </div>
        <hr />
        <section class="menu">
          <ul>
            <li>
              <a href="contact.php"><img src="assets/image/email1.png" alt="ContactUs" /><span>Contact Us</span></a>
            </li>
            <li><a href="watchlist.php"><img src="assets/image/list-24.png" alt="Watchlist" /><span>Watchlist</span></a>
            </li>
            <li>
              <a href="upcomming.php"><img src="assets/image/clock.png" alt="Upcomming" /><span>Upcomming</span></a>
            </li>
            <li>
              <a href="explore.php"><img src="assets/image/clock.png" alt="explore" /><span>Explore</span></a>
            </li>
          </ul>

          <hr />
        </section>

        <div class="profile-settings">
          <div class="profile-settings-left">
            <a href="profile.php"
              ><img src="assets/image/profile20px.png" /><span>'. $_SESSION['username'] ,'</span>
            </a>
          </div>
          <div class="profile-settings-right">
            <a href="#"><img src="assets/image/settings-icon.png" /> </a>
            <a href="templates/logout.php" class="search-button" />Log Out</a>
          </div>
        </div>
</div>'
?>