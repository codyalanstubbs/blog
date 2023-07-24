<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Swap our for actual link-->
    <link rel="canonical" href="https://www.mealprepfunday.com/blog" />

    <meta
      name="description"
      content="Free meal prep recipes created by meal preppers for meal preppers. Browse, share, and plan meal prep recipes with other meal preppers. Whether you meal prep on Sunday, Monday, or any other day, it should always be a Meal Prep Funday!"
    />
    <meta
      name="keywords"
      content="meal prep app, meal prepping app, meal planning app, meal prep recipes, meal plan recipes, meal plan, meal prep, meal prep funday, meal prep sunday, meal prep monday"
    />

    <!--Social Media Display-->
    <meta
      property="og:title"
      content="Free meal prep recipes created by meal preppers for meal preppers."
    />
    <meta
      property="og:description"
      content="Browse, share, and plan meal prep recipes with other meal preppers. Whether you meal prep on Sunday, Monday, or any other day, it should always be a Meal Prep Funday!"
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mealprepfunday.com" />
    <meta property="og:image" content="https://i.imgur.com/OcHpgSL.jpg" />
    <meta
      property="og:image:secure_url"
      content="https://i.imgur.com/OcHpgSL.jpg"
    />
    <meta name="”twitter:image”" content="https://i.imgur.com/OcHpgSL.jpg" />

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Preload -->
    <link
      rel="preload"
      as="image"
      href="/images/meal-prep-container-landing.webp"
    />
    <link
      rel="preload"
      as="font"
      type="font/woff2"
      href="fonts/bungee-shade-v11-latin-regular.woff2"
      crossorigin
    />
    <link
      rel="preload"
      as="font"
      type="font/woff2"
      href="fonts/nunito-sans-v15-latin-700.woff2"
      crossorigin
    />
    <link
      rel="preload"
      as="font"
      type="font/woff2"
      href="fonts/nunito-sans-v15-latin-regular.woff2"
      crossorigin
    />

    <link rel="stylesheet" href="/css/root.css" />
    <link rel="stylesheet" href="/css/blog.css" />

    <!--If the user has javascript disbaled, load this stylesheet-->
    <noscript>
      <link rel="stylesheet" href="/css/local.css" />
    </noscript>

    <title>Blog - Meal Prep Funday</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  </head>

  <body>
    <!--Screen reader skip main nav-->
    <a class="skip" aria-label="skip to main content" href="#main"
      >Click To Skip To Main Content</a
    >

    <!-- ============================================ -->
    <!--                 Navigation                   -->
    <!-- ============================================ -->

    <div id="navigation">
      <div aria-hidden="true" class="background-color-div">
        <!--This div is used to overcome a z-index issue where the open
                #navbar-menu is on top of the #navigation. This bar places itself 
                the #navbar-menu so that menu appears behind the #navigation
            -->
      </div>
      <div class="container">
        <a
          class="logo"
          aria-label="click to go to home page"
          href="/index.html"
        >
          <img
            class="dark"
            aria-hidden="true"
            src="/images/logo-light.svg"
            decoding="async"
            loading="lazy"
            alt="logo"
            width="200"
            height="200"
          />
        </a>

        <!--Main Nav-->
        <nav id="navbar-menu">
          <ul>
            <li><a href="/index.html">Home</a></li>
            <li><a href="/about.html">About</a></li>
            <li><a href="/pricing.html">Pricing</a></li>
            <li><a href="https://app.mealprepfunday.com">Recipes</a></li>
            <li><a class="active" href="https://app.mealprepfunday.com/blog">Blog</a></li>
            <li>
              <a
                class="signin button-solid"
                href="https://app.mealprepfunday.com/login"
                >Sign In →</a
              >
            </li>
          </ul>
        </nav>

        <!--Mobile Nav toggle-->
        <button id="navigation-menu" class="hamburger-menu">
          <span aria-hidden="true"></span>
        </button>
      </div>
    </div>

    <main id="main">
        {{ $slot }}
    </main>

    <!-- ============================================ -->
    <!--                     FOOTER                   -->
    <!-- ============================================ -->

    <footer id="footer">
      <div class="container">
        <div class="left-section">
          <a class="logo" href="/index.html"
            ><img
              loading="lazy"
              decoding="async"
              src="/images/logo-light.svg"
              alt="logo"
              width="200"
              height="200"
          /></a>
          <p>
            Meal Prep Funday is a meal prep app
            <strong>by meal preppers for meal preppers</strong>. Browse, share,
            and plan weekly meal preps.
          </p>
        </div>
        <div class="right-section">
          <div class="lists">
            <ul>
              <li>
                <h2>Information</h2>
              </li>
              <li><a href="/index.html">Home</a></li>
              <li><a href="/about.html">About</a></li>
              <li><a href="/pricing.html">Pricing</a></li>
              <li><a href="https://app.mealprepfunday.com">Recipes</a></li>
              <!-- <li><a href="/blog.html">Blog</a></li> -->
            </ul>
            <ul>
              <li>
                <h2>Features:</h2>
              </li>
              <li>Meal Planner</li>
              <li>Community Recipes</li>
              <li>Smart Grocery List</li>
              <li>Email Grocery Link</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="credit">
        <span>Built by</span>
        <a href="https://codyalanstubbs.com" target="_blank" rel="noopener"
          >Cody Alan Stubbs</a
        >.
        <span class="copyright"> Copyright 2021 - Present</span>
      </div>
    </footer>

    <script defer src="/nav.js"></script>
    <!--
        This script adds a class to the body after scrolling 100px
        and we used these body.scroll styles to create some on scroll 
        animations with the navbar
    -->
    <script>
      document.addEventListener("scroll", (e) => {
        const scroll = document.documentElement.scrollTop;
        if (scroll >= 100) {
          document.querySelector("body").classList.add("scroll");
        } else {
          document.querySelector("body").classList.remove("scroll");
        }
      });
    </script>
  </body>
</html>
