<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i|Nunito:300,300i"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" type="image/png" href="img/favicon.svg" />
    <title>Save Your Date &mdash; Event Planners</title>
  </head>
  <body class="container">
    <div class="sidebar">
      <button class="nav-btn"></button>
    </div>

    <header class="header">
      <img src="img/favicon.svg" alt="Logo" class="header__logo" />
      <h3 class="heading-3">Making Your Day</h3>
      <h1 class="heading-1">As Memorable as Ever</h1>
      <button class="btn header__btn">View Past Events</button>
      <div class="header__seenon-text">As Seen On</div>
      <div class="header__seenon-logos">
        <img src="img/logo-bbc.png" alt="BBC" />
        <img src="img/logo-forbes.png" alt="Forbes" />
        <img src="img/logo-techcrunch.png" alt="TechCrunch" />
        <img src="img/logo-bi.png" alt="BI" />
      </div>
    </header>

    <section class="planners">
      <h3 class="heading-3">Our Developers</h3>
      <div class="planners__list">
        <img
          src="img/planner2.jpg"
          alt="Wedding Planner"
          class="planners__img"
        />
        <div class="planners__detail">
          <h4 class="heading-4 heading-4--light">Ken Gabriel BAsobas </h4>
          <p class="planners__email">email.com</p>
        </div>

        <img
          src="img/planner2.jpg"
          alt="Wedding Planner"
          class="planners__img"
        />
        <div class="planners__detail">
          <h4 class="heading-4 heading-4--light">JM Lignig</h4>
          <p class="planners__email">email.com</p>
        </div>

        <img
          src="img/planner2.jpg"
          alt="Wedding Planner"
          class="planners__img"
        />
        <div class="planners__detail">
          <h4 class="heading-4 heading-4--light">Herbert Castro</h4>
          <p class="planners__email">email.com</p>
        </div>
      </div>
    </section>

    <section class="features">
      <div class="feature">
        <img class="feature__icon" src="img/globe.svg" />
        <h4 class="heading-4 heading--dark">Breathtaking Destinations</h4>
        <p class="feature__text">
        "Turning Moments Into Memories: Let Our Event Architects Design Your Perfect Occasion, Where Every Detail Tells a Story of Success and Celebration."
        </p>
      </div>

      <div class="feature">
        <img class="feature__icon" src="img/home.svg" />
        <h4 class="heading-4 heading--dark">Only the Most Beautiful Venues</h4>
        <p class="feature__text">
        "Your Vision, Our Expertise: With Our Event Maestros at the Helm, Watch Your Ideas Blossom Into Unforgettable Experiences That Leave a Lasting Impression."
        </p>
      </div>

      <div class="feature">
        <img class="feature__icon" src="img/cake.svg" />
        <h4 class="heading-4 heading--dark">Variety of Catering Partners</h4>
        <p class="feature__text">
        "From Concept to Creation: Trust Our Team of Event Magicians to Bring Your Dreams to Life, Crafting Experiences That Delight and Inspire at Every Turn."
        </p>
      </div>

      <div class="feature">
        <img class="feature__icon" src="img/mail.svg" />
        <h4 class="heading-4 heading--dark">RSVPs Handled for You</h4>
        <p class="feature__text">
        "Where Every Detail Counts: Our Event Craftsmen Work Tirelessly to Ensure Your Occasion Shines Bright, Leaving Guests Enthralled and Begging for More."
        </p>
      </div>

      <div class="feature">
        <img class="feature__icon" src="img/flower.svg" />
        <h4 class="heading-4 heading--dark">Florist Included</h4>
        <p class="feature__text">
        "Elevate Your Events to Extraordinary: Let Our Team of Planners Take the Reins, Delivering Seamless Experiences That Exceed Expectations and Wow Audiences."
        </p>
      </div>

      <div class="feature">
        <img class="feature__icon" src="img/rings.svg" />
        <h4 class="heading-4 heading--dark">No Worries on Your Day</h4>
        <p class="feature__text">
        "Experience the Difference: With Our Event Alchemists at Your Side, Transform Ordinary Gatherings Into Unforgettable Moments That Leave a Lasting Impression."
        </p>
      </div>
    </section>

    <div class="story__pictures">
      <img
        class="story__img--1"
        src="img/story-1.jpg"
        alt="Couple with new house"
      />
      <img class="story__img--2" src="img/story-2.jpg" alt="New house" />
    </div>

    <div class="story__content">
      <h3 class="heading-3 mb-sm">Happy Customers</h3>
      <h2 class="heading-2 heading-2--dark mb-md">
        &ldquo;The best decision of our lives!&rdquo;
      </h2>
      <p class="story__text">
      "Unlock the extraordinary with our event planning expertise, where every detail is meticulously crafted to perfection. From conceptualization to execution, we're here to transform your vision into an unforgettable reality. Let us curate your special moments, leaving you free to savor the joy and magic of your event."
      </p>
      <button class="btn story__btn" onclick="window.location.href='contact/index.html'">Contact Us</button>
    </div>

    <section class="venues">
      <div class="venue">
        <img src="img/venue-1.jpg" alt="Venue" class="venue__img" />
        <img
          src="img/heart-empty.svg"
          alt="Like"
          class="venue__like"
          id="nolike--1"
        />
        <img
          src="img/heart-full.svg"
          alt="Like"
          class="venue__like hide"
          id="like--1"
        />
        <h5 class="venue__name">Beach & Hotel Venue</h5>
        <div class="venue__location">
          <svg>
            <use xlink:href="img/sprite.svg#icon-map-pin"></use>
          </svg>
          <p>Liwa</p>
        </div>
        <div class="venue__guests">
          <svg>
            <use xlink:href="img/sprite.svg#icon-profile-male"></use>
          </svg>
          <p>100 Guests</p>
        </div>
        <div class="venue__season">
          <img src="img/season.svg" alt="Season" class="venue__icon" />
          <p>Spring, Summer</p>
        </div>
        <div class="venue__price">
          <img src="img/price.svg" alt="Price" class="venue__icon" />
          <p>PHP 100 000</p>
        </div>
        <button class="btn venue__btn" onclick="window.location.href='payment/index.html'">Reserve Venue</button>
      </div>

      <div class="venue">
        <img src="img/venue-2.jpg" alt="Venue" class="venue__img" />
        <img
          src="img/heart-empty.svg"
          alt="Like"
          class="venue__like"
          id="nolike--2"
        />
        <img
          src="img/heart-full.svg"
          alt="Like"
          class="venue__like hide"
          id="like--2"
        />
        <h5 class="venue__name">Modern Hotel Venue</h5>
        <div class="venue__location">
          <svg>
            <use xlink:href="img/sprite.svg#icon-map-pin"></use>
          </svg>
          <p>Mangrove Resort Hotel</p>
        </div>
        <div class="venue__guests">
          <svg>
            <use xlink:href="img/sprite.svg#icon-profile-male"></use>
          </svg>
          <p>120 Guests</p>
        </div>
        <div class="venue__season">
          <img src="img/season.svg" alt="Season" class="venue__icon" />
          <p>All Seasons</p>
        </div>
        <div class="venue__price">
          <img src="img/price.svg" alt="Price" class="venue__icon" />
          <p>PHP 80 000</p>
        </div>
        <button class="btn venue__btn" onclick="window.location.href='payment/index.html'">Reserve Venue</button>
      </div>

      <div class="venue">
        <img src="img/venue-4.jpg" alt="Venue" class="venue__img" />
        <img
          src="img/heart-empty.svg"
          alt="Like"
          class="venue__like"
          id="nolike--3"
        />
        <img
          src="img/heart-full.svg"
          alt="Like"
          class="venue__like hide"
          id="like--3"
        />
        <h5 class="venue__name">Large Venue</h5>
        <div class="venue__location">
          <svg>
            <use xlink:href="img/sprite.svg#icon-map-pin"></use>
          </svg>
          <p>Camayan </p>
        </div>
        <div class="venue__guests">
          <svg>
            <use xlink:href="img/sprite.svg#icon-profile-male"></use>
          </svg>
          <p>200 Guests</p>
        </div>
        <div class="venue__season">
          <img src="img/season.svg" alt="Season" class="venue__icon" />
          <p>Spring, Summer</p>
        </div>
        <div class="venue__price">
          <img src="img/price.svg" alt="Price" class="venue__icon" />
          <p>PHP 60 000</p>
        </div>
        <button class="btn venue__btn" onclick="window.location.href='payment/index.html'">Reserve Venue</button>
      </div>

      <div class="venue">
        <img src="img/venue-3.jpg" alt="Venue" class="venue__img" />
        <img
          src="img/heart-empty.svg"
          alt="Like"
          class="venue__like"
          id="nolike--4"
        />
        <img
          src="img/heart-full.svg"
          alt="Like"
          class="venue__like hide"
          id="like--4"
        />
        <h5 class="venue__name">Cozy Rustic Venue</h5>
        <div class="venue__location">
          <svg>
            <use xlink:href="img/sprite.svg#icon-map-pin"></use>
          </svg>
          <p>Subic</p>
        </div>
        <div class="venue__guests">
          <svg>
            <use xlink:href="img/sprite.svg#icon-profile-male"></use>
          </svg>
          <p>80 Guests</p>
        </div>
        <div class="venue__season">
          <img src="img/season.svg" alt="Season" class="venue__icon" />
          <p>All Seasons</p>
        </div>
        <div class="venue__price">
          <img src="img/price.svg" alt="Price" class="venue__icon" />
          <p>PHP 30 000</p>
        </div>
        <button class="btn venue__btn" onclick="window.location.href='payment/index.html'">Reserve Venue</button>
      </div>

      <div class="venue">
        <img src="img/venue-5.jpg" alt="Venue" class="venue__img" />
        <img
          src="img/heart-empty.svg"
          alt="Like"
          class="venue__like"
          id="nolike--5"
        />
        <img
          src="img/heart-full.svg"
          alt="Like"
          class="venue__like hide"
          id="like--5"
        />
        <h5 class="venue__name">Beach Venue</h5>
        <div class="venue__location">
          <svg>
            <use xlink:href="img/sprite.svg#icon-map-pin"></use>
          </svg>
          <p>Saturn to the moon</p>
        </div>
        <div class="venue__guests">
          <svg>
            <use xlink:href="img/sprite.svg#icon-profile-male"></use>
          </svg>
          <p>180 Guests</p>
        </div>
        <div class="venue__season">
          <img src="img/season.svg" alt="Season" class="venue__icon" />
          <p>All Seasons</p>
        </div>
        <div class="venue__price">
          <img src="img/price.svg" alt="Price" class="venue__icon" />
          <p>PHP 70 000</p>
        </div>
        <button class="btn venue__btn" onclick="window.location.href='payment/index.html'">Reserve Venue</button>
      </div>

      <div class="venue">
        <img src="img/venue-6.jpg" alt="Venue" class="venue__img" />
        <img
          src="img/heart-empty.svg"
          alt="Like"
          class="venue__like"
          id="nolike--6"
        />
        <img
          src="img/heart-full.svg"
          alt="Like"
          class="venue__like hide"
          id="like--6"
        />
        <h5 class="venue__name">Small  Venue</h5>
        <div class="venue__location">
          <svg>
            <use xlink:href="img/sprite.svg#icon-map-pin"></use>
          </svg>
          <p>Mars </p>
        </div>
        <div class="venue__guests">
          <svg>
            <use xlink:href="img/sprite.svg#icon-profile-male"></use>
          </svg>
          <p>150 Guests</p>
        </div>
        <div class="venue__season">
          <img src="img/season.svg" alt="Season" class="venue__icon" />
          <p>All Seasons</p>
        </div>
        <div class="venue__price">
          <img src="img/price.svg" alt="Price" class="venue__icon" />
          <p>PHP 90 000</p>
        </div>
        <button class="btn venue__btn" onclick="window.location.href='payment/index.html'">Reserve Venue</button>
      </div>
    </section>

   

    <footer class="footer">
      <ul class="nav">
        <li class="nav__item">
          <a href="#" class="nav__link">Browse Past Events</a>
        </li>
        <li class="nav__item">
          <a href="#" class="nav__link">Request Proposal</a>
        </li>
        <li class="nav__item">
          <a href="#" class="nav__link">Download Wedding Checklist</a>
        </li>
        <li class="nav__item">
          <a href="#" class="nav__link">Get to Know Our Partners</a>
        </li>
        <li class="nav__item">
          <a href="#" class="nav__link">Contact Us</a>
        </li>
        <li class="nav__item">
          <a href="#" class="nav__link">Come Work With Us</a>
        </li>
      </ul>
      
    </footer>

    <script src="./js/main.js"></script>
  </body>
</html>

