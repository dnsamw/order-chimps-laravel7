@extends('layouts.frontend')

@push('d-presence-css')
    <link rel="stylesheet" href="{{asset('dist/css/d-presence.css')}}">
@endpush

@section('title')
{{'Digital Presence'}}
@endsection

@section('description')
{{'Create an undeniable digital presence for your restaurant business with our Brand Identity, Website Design & Development, and SEO services. Stand out and get noticed!'}}
@endsection

@section('content')
<div class="container" id="main">
    <section class="showcase">
      <div class="text-wrapper">
        <h3
          class="animate__animated animate__fadeInLeft animate__delay-100ms"
        >
          Digital Presence
        </h3>
        <p class="animate__animated animate__fadeInLeft animate__delay-200ms">
          Are you looking to take your restaurant to new heights? If so, it's
          time to focus on building a robust digital presence. At Order
          Chimps, we understand the significance of a strong digital presence
          for restaurants that want to expand their customer base, increase
          revenue, and foster brand loyalty. We offer a variety of services
          that can help you create a digital footprint that reflects your
          restaurant's unique identity, from SEO to website design and
          development. With our team of experts, we'll help you develop a
          website that not only looks good but also drives traffic and sales.
          Why wait?
        </p>
      </div>
      <div class="image-wrapper animate__animated animate__fadeInRight">
        <img src="/svg/DigitalPresence.svg" alt="Digital Presence"/>
      </div>
    </section>

    <section class="2-col-grid">
      <div class="flexbox">
        <div class="leftside grid-card">
          <h1>Website Design & Development</h1>
          <ul class="custom-bullet doodle-dot">
            <li>
              Tailored website design and development services for restaurant
            </li>
            <li>Eye-catching design and optimized for search engines</li>
            <li>
              User-friendly with easy-to-navigate menu and online ordering
            </li>
          </ul>
        </div>
        <div class="rightside grid-card">
          <h1>Brand Identity</h1>
          <ul class="custom-bullet doodle-dot">
            <li>
              Brand identity creation and rebranding services for restaurants
            </li>
            <li>
              Unique brand identity that represents personality and values
            </li>
            <li>
              Logo design, colour schemes, and typography for a memorable
              brand
            </li>
          </ul>
        </div>
      </div>
      <div class="flexbox" id="singleRow">
        <div class="leftside grid-card single-row-flex-card">
          <h1>Search Engine Optimization (SEO)</h1>
          <ul class="custom-bullet doodle-dot">
            <li>Personalized SEO services for restaurants</li>
            <li>Improve local search rankings and attract more customers</li>
            <li>
              Target local customers and rank high on search engine results
              pages
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>

  <div class="hero-btns-container" id="hero-btns-container-e-commerce">
    <span class="demo-button">
      <a class="animated-btn" href="/?subject=digital-presence">Boost Your Digital Presence Today!</a>
    </span>
  </div>
@endsection