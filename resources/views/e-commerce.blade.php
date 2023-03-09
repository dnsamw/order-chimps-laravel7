@extends('layouts.frontend')

@push('e-commerce-css')
    <link rel="stylesheet" href="{{asset('dist/css/e-commerce.css')}}">
@endpush

@section('title')
    {{'E - Commerce'}}
@endsection

@section('content')

<div class="container" id="main">
    <section class="showcase">
      <div class="text-wrapper">
        <h3
          class="animate__animated animate__fadeInLeft animate__delay-100ms"
        >
          E - Commerce
        </h3>
        <p class="animate__animated animate__fadeInLeft animate__delay-200ms">
          Looking to expand your restaurant's reach and take your operations
          to the next level? Utilise a range of flexible solutions for your
          business, including Click & Collect, Delivery, Reservations, Meal
          Deals and Plans, and Gift Vouchers. Empower your business and offer
          your customers a range of convenient options for engaging, driving
          sales and enhancing customer satisfaction.
        </p>
      </div>
      <div class="video-wrapper animate__animated animate__fadeInRight">
        <video autoplay loop muted playsinline>
          <source
            src="https://orderchimps-new.web.app/videos/phone%20view%20%20final_VP9_old.webm"
            type="video/webm"
          />
          />
          <!-- <source src="movie.ogg" type="video/ogg" /> -->
          Your browser does not support the video tag.
        </video>
      </div>
    </section>

    <section class="feature-card-reverse">
      <div class="card-text">
        <h4 class="animate__animated animate__fadeInUp">Click & Collect</h4>
        <p class="animate__animated animate__fadeInUp">
          Enable customers to order their meals online, streamlining the
          ordering process and allowing them to skip the queue. This feature
          encourages customers to use your online ordering system, which can
          help your business grow and increase your customer base. By bringing
          e-commerce directly to your website, you can enhance your digital
          presence and offer your customers a more convenient and engaging
          experience.
        </p>
      </div>
      <div class="card-image animate__animated animate__fadeInUp">
        <img src="/svg/Click&Collect.svg" alt="Click & Collect"/>
      </div>
    </section>

    <section class="feature-card">
      <div class="card-text">
        <h4>Delivery</h4>
        <p>
          Offer your customers delivery services without relying on costly
          third-party delivery platforms. With a zero commission-based model,
          you get to keep your profits while expanding your business and
          providing your customers with a convenient and flexible ordering
          option.
        </p>
      </div>
      <div class="card-image">
        <img src="/svg/Delivery.svg" alt="Delivery"/>
      </div>
    </section>

    <section class="feature-card-reverse">
      <div class="card-text">
        <h4>Reservations</h4>
        <p>
          Allow customers to book tables online, streamlining the booking
          process and helping your business better manage its workflow. By
          accepting reservations from online and offline sources, restaurants
          can better forecast demand, improve sourcing and staffing, and
          reduce costs in the long run. This is also an easy and effective way
          to improve customer satisfaction, optimize operations, and enhance
          the profitability of your business.
        </p>
      </div>
      <div class="card-image">
        <img src="/svg/Reservations.svg" alt="Reservations"/>
      </div>
    </section>

    <section class="feature-card">
      <div class="card-text">
        <h4>Meals Deals & Subscriptions</h4>
        <p>
          Create meal plans and subscription packages for your customers to
          build a steady income stream and increase sales efficiency. Order
          Chimps makes it easy to offer exclusive deals and subscription
          plans, increasing customer loyalty and retention. Manage deals and
          subscriptions easily, build a loyal customer base, and enhance sales
          with Order Chimps.
        </p>
      </div>
      <div class="card-image">
        <img src="/svg/MealsDeals&Plans.svg" alt="Meals Deals & Plans"/>
      </div>
    </section>

    <section class="feature-card-reverse">
      <div class="card-text">
        <h4>Gift Vouchers</h4>
        <p>
          A great way to increase brand awareness and customer engagement
          while growing your customer base. They also provide a cash flow
          positive marketing strategy for your business. Easily create and
          manage your own gift vouchers and offer them to your customers,
          enhancing your business and bringing in more revenue.
        </p>
      </div>
      <div class="card-image">
        <img src="/svg/GiftVouchers.svg" alt="Gift Vouchers"/>
      </div>
    </section>
  </div>

  <div class="hero-btns-container" id="hero-btns-container-e-commerce">
    <span class="demo-button">
      <a class="animated-btn" href="/?subject=e-commerce">Boost Your Online Sales Today!</a>
    </span>
  </div>
@endsection