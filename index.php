<!doctype html>
<html lang="en">

<?php
include_once __DIR__ . "/../../dui/_index.php";

Head('trillo')
  ->meta(author: "enginoobz", description: "landing page for trillo")
  ->css('css/main.css')
  ->show();
?>

<body class="flat-style custom-bg">
  <!-- <div class="display-table">
                <div class="display-content ">
                        <section class="container">
                        </section>
                </div>
        </div> -->
  <div class="content-container">
    <!-- HEADER -->
    <header class="header">
      <img src="img/logo.png" alt="trillo logo" class="logo">

      <!-- TODO - DUI: Input component for Material/Flat style  -->
      <!-- Flexbox -->
      <form action="javascript:'" class="input-wrapper search-box">
        <input type="text" class="input__field" placeholder="Search hotels">
        <button class="input__btn">
          <svg class="input__icon">
            <use href="img/sprite.svg#icon-magnifying-glass"></use>
          </svg>
        </button>
      </form>

      <nav class="user-nav">
        <div class="user-nav__icon-box">
          <svg class="user-nav__icon">
            <use href="img/sprite.svg#icon-bookmark"></use>
          </svg>
          <span class="user-nav__notification">7</span>
        </div>
        <div class="user-nav__icon-box">
          <svg class="user-nav__icon">
            <use href="img/sprite.svg#icon-chat"></use>
          </svg>
          <span class="user-nav__notification">13</span>
        </div>
        <div class="user-nav__user">
          <img src="img/user.jpg" alt="User photo" class="user-nav__user-photo">
          <span class="user-nav__username">enginoobz</span>
        </div>
      </nav>

    </header>

    <div class="content">
      <!-- SIDEBAR -->
      <nav class="sidebar">
        <ul class="side-nav">
          <li class="side-nav__item">
            <?php
            NavItem("Hotel", "icon-home", isActive: true);
            NavItem("Flight", "icon-aircraft-take-off");
            NavItem("Car rental", "icon-key");
            NavItem("Tours", "icon-map");
            ?>
          </li>
        </ul>
        <div class="legal">
          &copy;2021 by trillo. All rights reserved.
        </div>
      </nav>
      <!-- MAIN CONTENT -->
      <main class="hotel-view">
        <!-- GALLERY -->
        <div class="gallery">
          <figure class="gallery__item">
            <img src="img/hotel-1.jpg" alt="Photo of hotel 1" class="gallery__photo">
          </figure>
          <figure class="gallery__item">
            <img src="img/hotel-2.jpg" alt="Photo of hotel 2" class="gallery__photo">
          </figure>
          <figure class="gallery__item">
            <img src="img/hotel-3.jpg" alt="Photo of hotel 3" class="gallery__photo">
          </figure>
        </div>
        <!-- OVERVIEW -->
        <div class="overview">
          <h1 class="overview__heading">
            Hotel Las Palmas
          </h1>
          <div class="overview__stars">
            <svg class="overview__icon-star">
              <use href="img/sprite.svg#icon-star"></use>
            </svg>
            <svg class="overview__icon-star">
              <use href="img/sprite.svg#icon-star"></use>
            </svg>
            <svg class="overview__icon-star">
              <use href="img/sprite.svg#icon-star"></use>
            </svg>
            <svg class="overview__icon-star">
              <use href="img/sprite.svg#icon-star"></use>
            </svg>
          </div>
          <div class="overview__location">
            <svg class="overview__icon-location">
              <use href="img/sprite.svg#icon-location-pin"></use>
            </svg>
            <button class="btn-inline">Albufeira, Portugal</button>
          </div>
          <div class="overview__rating">
            <div class="overview__rating-average">6.9</div>
            <div class="overview__rating-count">429 views</div>
          </div>
        </div>
        <!-- DETAIL -->
        <div class="detail">
          <div class="description">
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <ul class="list">
              <li class="list__item">Close to the beach</li>
              <li class="list__item">Breakfast included</li>
              <li class="list__item">Free airport shttle</li>
              <li class="list__item">Free wifi in all rooms</li>
              <li class="list__item">Air conditioning and heating</li>
              <li class="list__item">Pets allowed</li>
              <li class="list__item">We speak all languages</li>
              <li class="list__item">Perfect for families</li>
            </ul>
            <div class="recommend">
              <p class="recommend__count">
                Lucy and 3 other friends recommend this hotel.
              </p>
              <div class="recommend__friends">
                <img src="img/user-3.jpg" alt="Friend 1" class="recommend__photo">
                <img src="img/user-4.jpg" alt="Friend 2" class="recommend__photo">
                <img src="img/user-5.jpg" alt="Friend 3" class="recommend__photo">
                <img src="img/user-6.jpg" alt="Friend 4" class="recommend__photo">
              </div>
            </div>
          </div>
          <div class="user-reviews">
            Reviews
          </div>
        </div>
      </main>
    </div>
  </div>
  <script async src="../../dui/js/main.js" type="module"></script>
</body>

</html>

<?php
function NavItem($label, $icon, $isActive = false)
{
  $activeClass = $isActive ? "side-nav__item--active" : "";
  echo "
  <li class='side-nav__item $activeClass'>
    <a href='javascript:' class='side-nav__link'>
      <svg class='side-nav__icon'>
        <use href='img/sprite.svg#$icon'></use>
      </svg>
      <span>$label</span>
    </a>
  </li>
  ";
}
?>