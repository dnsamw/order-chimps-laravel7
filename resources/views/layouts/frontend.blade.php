<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#ffaa00">
    <meta name="msapplication-navbutton-color" content="#ffaa00">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffaa00">


    {{-- SEO METATAGS --}}
    {{-- <!-- Primary Meta Tags --> --}}
    <meta name="title" content="Order Chimps - @yield('title')">
    <meta name="description" content="@yield('description')">

    {{-- <!-- Open Graph / Facebook --> --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://orderchimps.com/">
    <meta property="og:title" content="Order Chimps - @yield('title')">
    <meta property="og:description" content=" @yield('description')">
    <meta property="og:image" content="https://dineshm35.sg-host.com/img/orderchimps_uk.jpg">

    {{-- <!-- Twitter --> --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://orderchimps.com/">
    <meta property="twitter:title" content="Order Chimps - @yield('title')">
    <meta property="twitter:description" content="@yield('description')">
    <meta property="twitter:image" content="https://dineshm35.sg-host.com/img/orderchimps_uk.jpg">
    {{-- SEO METATAGS --}}

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    />
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/css/text-slider.css')}}" />

    @stack('careers-css')
    @stack('dm-manager-css')
    @stack('d-marketing-css')
    @stack('d-presence-css')
    @stack('e-commerce-css')
    @stack('faq-css')
    @stack('h-pos-css')
    @stack('partnerships-css')
    @stack('p-policy-css')
    @stack('tos-css')

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <script src="{{asset('dist/js/typed.min.js')}}"></script>
    <link rel="icon" type="image/png" href="/img/chimp-v2.png" />
    <title>OrderChimps - @yield('title')</title>
    @stack('validate-js')
    
  </head>
  <body class="body-class" style="min-height: 100vh">
    <!-- TOP-NAVIGATION SECTION -->
    <section class="topNavigation section-1">
      <!-- MOBILE BURGER MENU -->
      <div id="mobile-top-menu" class="burger-menu">
        <div class="top-bar">
          <div class="brand">
            <div class="logo">
              <a href="/">
                <img
                  src="https://orderchimps-new.web.app/images/oc-logo-new.svg"
                  alt="logo"
                />
              </a>
            </div>
          </div>
          <span id="burger-close-icon">
            <a class="bubble-btn" href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </a>
          </span>
        </div>
        <div class="content">
          <div class="burger-menu-items">
            <div class="burger-menu-item">
              <a id="burger-item__solutions">POS Platform</a>
              <ul class="mobile-submenu" id="solutions__submenu">
                <li>
                  <a href="/hybrid-pos">Hybrid POS</a>
                </li>
                <li>
                  <a href="/e-commerce"
                    >E - Commerce</a
                  >
                </li>
                <li>
                  <a href="/digital-marketing-manager">
                    Digital Marketing Manager</a
                  >
                </li>
              </ul>
            </div>
            <div class="burger-menu-item">
              <a id="burger-item__services">Services</a>
              <ul class="mobile-submenu" id="services__submenu">
                <li>
                  <a href="/digital-marketing"
                    >Digital Marketing</a
                  >
                </li>
                <li>
                  <a href="/digital-presence"
                    >Digital Presence</a
                  >
                </li>
              </ul>
            </div>
            <div class="burger-menu-item">
              <a id="burger-item__freereservation">Free Reservation</a>
              <ul class="mobile-submenu" id="freereservation__submenu">
                <li>
                  <a href="https://controlhub.orderchimps.com/">Signup</a>
                </li>
                <li>
                  <a href="/#contact_form">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="burger-menu-item">
              <a href="/partnerships">Partnerships</a>
            </div>
            <div class="burger-menu-item">
              <a href="/careers">Careers</a>
            </div>
          </div>

          <div class="burger-enu-buttons">
            <div class="action-buttons">
              <span class="book-a-demo-btn">
                <a href="/?subject=book-a-demo"> Book a Demo </a>
              </span>
              <span class="control-hub-button">
                <a
                  class="hvr-radial-out"
                  href="https://controlhub.orderchimps.com/"
                  target="_blank"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-user"
                  >
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </a>
              </span>
            </div>
          </div>
        </div>
      </div>

      <nav class="navbar" id="header">
        <div class="brand">
          <div class="logo">
            <a href="/">
              <img
                src="https://orderchimps-new.web.app/images/oc-logo-new.svg"
                alt="logo"
              />
            </a>
          </div>
        </div>

        <!-- TOPNAVIGATION -->
        <div class="navbar-links">
          <ul>
            <li id="dropdown-btn">
              <a
                >POS Platform
                <span name="chevron-down-outline">
                  <svg
                    id="dropdown-arrow"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                    />
                  </svg> </span
              ></a>
            </li>
            <!-- <li id="services__nav__item"></li> -->
            <li id="dropdown-btn__services">
              <a
                >Services
                <span name="chevron-down-outline">
                  <svg
                    id="dropdown-arrow__services"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                    />
                  </svg> </span
              ></a>
            </li>
            <li id="dropdown-btn__reservation">
              <a
                >Free Reservation
                <span name="chevron-down-outline">
                  <svg
                    id="dropdown-arrow__reservation"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                    />
                  </svg> </span
              ></a>
            </li>
            <li id="partnership__nav__item">
              <a href="/partnerships">Parterships</a>
            </li>
            <li id="careers__nav__item">
              <a href="/careers">Careers </a>
            </li>
          </ul>
        </div>

        <div class="action-buttons">
          <span class="control-hub-button">
            <a
              class="hvr-radial-out-yellow"
              href="https://controlhub.orderchimps.com/"
              target="_blank"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-user"
              >
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </a>
          </span>

          <span
            id="topnav-book-demo-btn"
            class="demo-button nimated-btn animate-position-btn"
          >
            <a class="book-a-demo" href="/?subject=book-a-demo">Book a Demo</a>
          </span>

          <span id="burger-icon" class="control-hub-button">
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                />
              </svg>
            </a>
          </span>
        </div>
      </nav>
    </section>

    <!-- SOLUTIONS -->
    <div id="dropdown-wapper">
      <section id="dropdown-list">
        <a class="dropdown-item" href="/hybrid-pos"
          >Hybrid POS</a
        ><br />
        <a class="dropdown-item" href="/e-commerce"
          >E-Commerce</a
        ><br />
        <a
          class="dropdown-item"
          href="/digital-marketing-manager"
          >Digital Marketing Manager</a
        >
      </section>
    </div>

    <!-- SERVICES -->
    <div id="dropdown-wapper__services">
      <section id="dropdown-list__services">
        <a
          class="dropdown-item"
          href="/digital-marketing"
          >Digital Marketing</a
        ><br />
        <a
          class="dropdown-item"
          href="/digital-presence"
          >Digital Presence</a
        >
      </section>
    </div>

    <!-- RESERVATION -->
    <div id="dropdown-wapper__reservation">
      <section id="dropdown-list__reservation">
        <a
          class="dropdown-item"
          href="https://controlhub.orderchimps.com/"
          target="_blank"
          >Signup</a
        ><br />
        <a
          id="free_reservation_contact__nav_link"
          class="dropdown-item"
          href="./#contact_form"
          >Contact Us</a
        >
      </section>
    </div>

    <div id="overlay"></div>

<!-- HEADER END -->


@yield('content')


{{-- COOKIE CONCENT --}}
<div id="cookie-consent-box" class="cookie-consent cookie-consent--box">
  <div class="cookie-consent-content">
    <div class="image-container">
      <img src="/svg/cookiesart.svg" alt="cookies" class="cookie-img" />
    </div>
    <p>
      Hey there!, We just want to check if you're okay with us using cookies to make our website even more awesome.
      {{-- <a href="#" class="more-info">What for?</a> --}}
    </p>
    <div class="btn-wrapper">
      <a
        id="cookie-consent-dismiss"
        aria-label="dismiss cookie message"
        role="button"
        tabindex="0"
        class="cookie-consent__btn-dismiss button button--secondary"
        >accept</a
      >
      <a
        id="cookie-consent-dismiss-no"
        aria-label="dismiss cookie message"
        role="button"
        tabindex="0"
        class="cookie-consent__btn-dismiss button button--secondary"
        >decline</a
      >
    </div>
  </div>
</div>
<script>
  const consentBox = document.getElementById("cookie-consent-box");
  const consentBoxDismiss = document.getElementById("cookie-consent-dismiss");
  const consentBoxDismissNo = document.getElementById("cookie-consent-dismiss-no");

  //cookies concept 1
  function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
      }

      function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(";");
        for (var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == " ") c = c.substring(1);
          if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
      }

      function checkCookieOnLoad() {
        if (getCookie("orderchimps") === "yes") {
          consentBox.classList.add("hidden");
        } else {
          consentBox.classList.remove("hidden");
        }
      }



  consentBoxDismiss.addEventListener("click", function () {
    setCookie("orderchimps", "yes", 30);
    consentBox.classList.add("hidden");
  });

  consentBoxDismissNo.addEventListener("click", function () {
    setCookie("orderchimps", "no", 30);
    consentBox.classList.add("hidden");
  });

  checkCookieOnLoad();
</script>



<!-- FOOTER START -->
    <section class="footer">

      
    <!-- Footer Start -->
    <div class="footer-section">

      @stack('footer-links')

      <div class="footer-container">
        <div class="row">
          <div class="col-md-6 col-lg-8">
            <div class="row link-address">
              <div class="col-md-6 col-lg-4">
                <div class="footer-link">
                  <h3>POS Platform</h3>
                  <a href="/hybrid-pos"
                    >Hybrid POS</a
                  >
                  <a href="/e-commerce">E-Commerce</a>
                  <a href="/digital-marketing-manager"
                    >Digital Marketing Manager</a
                  >
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="footer-link">
                  <h3>Services</h3>
                  <a href="/digital-marketing"
                    >Digital Marketing</a
                  >
                  <a href="/digital-presence"
                    >Digital Presence</a
                  >
                </div>
              </div>
      
              <div class="col-md-6 col-lg-4">
                <div class="footer-link" >
                  <h3 class="special-link">
                    
                    <a href="/careers">Careers</a>
                  </h3>
                  <h3  class="special-link">
      
                    <a href="/partnerships">Partnerships</a>
                  </h3>
                  <h3  class="special-link">
                    <a href="/faq">FAQ</a>
      
                  </h3>
                </div>
              </div>
      
              <div class="col-md-6 col-lg-4">
                <div class="footer-link">
                  <h3>Links</h3>
                  <a href="/terms-of-use">Terms of use</a>
                  <a href="/privacy-policy">Privacy Policy</a>
                </div>
              </div>
      
              <div class="col-md-6 col-lg-4">
                <div class="footer-contact">
                  <h3>Get In Touch</h3>
                  <p><i class="fa fa-phone-alt"></i><a href="tel:+03300113630">0330 011 3630</a></p>
                  <p><i class="fa fa-envelope"></i> <a href="mailto:chimps@orderchimps.com">chimps@orderchimps.com</a></p>
                  <div class="footer-social">
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://facebook.com/orderchimps"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://instgram.com/orderchimpspos"><i class="fab fa-instagram"></i></a>
                    <a href="https://uk.linkedin.com/company/orderchimps"><i class="fab fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      {{-- <div class="footer-menu">
        <div class="f-menu">
          <a href="/terms-of-use">Terms of use</a>
          <a href="/privacy-policy">Privacy policy</a>
          <a href="/faq">FQAs</a>
        </div>
      </div> --}}
      <div class="copyright">
        <div class="row">
          <div class="col-md-6">
            <p>
              &copy; <a href="https://orderchimps.com">OrderChimps</a>  All Right Reserved. 2023
            </p>
          </div>
        </div>
        {{-- <div class="footer-social">
          <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
          <a href="https://facebook.com/orderchimps"><i class="fab fa-facebook-f"></i></a>
          <a href="https://instgram.com/orderchimpspos"><i class="fab fa-instagram"></i></a>
          <a href="https://uk.linkedin.com/company/orderchimps"><i class="fab fa-linkedin-in"></i></a>
        </div> --}}
      </div>
    </div>
    <!-- Footer End -->
  </section>

  <script src="{{asset('/dist/js/gsap.min.js')}}"></script>
  <script src="{{asset('/dist/js/ScrollTrigger.min.js')}}"></script>
  <script src="{{asset('/dist/js/ScrollToPlugin.min.js')}}"></script>
  <script src="{{asset('/dist/js/Draggable.min.js')}}"></script>
  <script src="{{asset('/dist/js/locomotive-scroll.min.js')}}"></script>
  <script src="{{asset('/dist/js/main.js')}}"></script>
  <script src="{{asset('/dist/js/text-slider.js')}}"></script>
</body>
</html>