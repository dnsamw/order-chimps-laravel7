@extends('layouts.frontend')

@push('dm-manager-css')
    <link rel="stylesheet" href="{{asset('dist/css/dm-manager.css')}}">
@endpush

@section('title')
    {{'Digital Marketing Manager'}}
@endsection

@section('content')
<div class="container" id="main">
    <section class="showcase">
      <div class="text-wrapper">
        <h3
          class="animate__animated animate__fadeInLeft animate__delay-100ms"
        >
          Digital Marketing Manager
        </h3>
        <p class="animate__animated animate__fadeInLeft animate__delay-200ms">
          In the fast-paced world of digital marketing, you need to stay ahead
          of the curve to make your business stand out. Order Chimps' Digital
          Marketing Manager offers an array of solutions, such as customer
          loyalty programs, email marketing, and integrated social media, to
          grow your business, increase customer retention, and improve brand
          awareness. With our cutting-edge technology and proven marketing
          strategies, your business can thrive in the competitive restaurant
          industry. So what are you waiting for? Let's take your marketing to
          the next level!
        </p>
      </div>
      <div class="video-wrapper animate__animated animate__fadeInRight">
        <video autoplay loop muted playsinline>
          <source
            src="https://orderchimps-new.web.app/videos/video%20laptop_VP9.webm"
            type="video/webm"
          />
          />
          <!-- <source src="movie.ogg" type="video/ogg" /> -->
          Your browser does not support the video tag.
        </video>
      </div>
    </section>

    <section class="feature-card">
      <div class="card-text">
        <h4 class="animate__animated animate__fadeInUp">Customer Loyalty</h4>
        <p class="animate__animated animate__fadeInUp">
          Automatically enroll your customers through the POS platform by
          promoting and rewarding regular engagement. By connecting all
          services to earn reward points, help business to incentivize
          customers to keep coming back and build a loyal customer base,
          ultimately boosting sales and revenue.
        </p>
      </div>
      <div
        class="card-image animate__animated animate__fadeInUp rotating-img"
      >
        <img src="/svg/CustomerLoyalty.svg" alt="Customer Loyalty"/>
      </div>
    </section>

    <section class="feature-card-reverse">
      <div class="card-text">
        <h4>Integreted Socail Media</h4>
        <p>
          Tailor your marketing strategies to align with your specific needs
          by using a results-based approach. By leveraging data insights and
          observing the results of marketing campaigns, you can better
          understand what your customers want, make informed decisions, and
          react accordingly, all without relying on costly third-party
          services.
        </p>
      </div>
      <div class="card-image">
        <img src="/svg/IntegretedSocailMedia.svg" alt="Integreted Socail Media"/>
      </div>
    </section>

    <section class="feature-card">
      <div class="card-text">
        <h4>Emial Marketing</h4>
        <p>
          easily utilize your existing business data to create email marketing
          campaigns and grow your customer base without spending extra time
          and money on third-party services. This enables businesses to focus
          on their core activities while expanding their customer base.
        </p>
      </div>
      <div class="card-image">
        <img src="/svg/EmialMarketing.svg" alt="Email Marketing"/>
      </div>
    </section>
  </div>

  <div class="hero-btns-container" id="hero-btns-container-e-commerce">
    <span class="demo-button">
      <a class="animated-btn" href="/?subject=digital-marketing-manager"
        >Revolutionize Your Marketing Strategy</a
      >
    </span>
  </div>
@endsection