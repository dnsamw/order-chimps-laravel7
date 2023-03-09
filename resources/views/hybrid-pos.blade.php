@extends('layouts.frontend')

@push('h-pos-css')
    <link rel="stylesheet" href="{{asset('dist/css/h-pos.css')}}">
@endpush

@section('title')
    {{'Hybrid POS'}}
@endsection

@section('content')
<div class="container" id="main">
    <section class="showcase">
      <div class="text-wrapper">
        <h3
          class="animate__animated animate__fadeInLeft animate__delay-100ms"
        >
          Hybrid POS
        </h3>
        <p class="animate__animated animate__fadeInLeft animate__delay-200ms">
          Say hello to Order Chimps POS - the future of your restaurant
          business! Our hybrid POS platform, complete with a digital menu and
          fast mobile payments, streamlines your operation and allows you to
          focus on what matters most: delicious food and happy customers.
        </p>
      </div>
      <div class="video-wrapper animate__animated animate__fadeInRight">
        <video autoplay loop muted playsinline>
          <source
            src="https://orderchimps-new.web.app/videos/croppedvp9ipad.webm"
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
        <h4 class="animate__animated animate__fadeInUp">Digital Menu</h4>
        <p class="animate__animated animate__fadeInUp">
          Easily update your menu content as frequently as you like and
          highlight key information to your customers, such as allergens and
          other tags, promotions and upsells. This feature can help you save
          money on print costs while also providing a more dynamic and
          engaging experience for your customers.
        </p>
      </div>
      <div class="card-image animate__animated animate__fadeInUp">
        <img src="/svg/DigitalMenu.svg" alt="Digital Menu"/>
      </div>
    </section>

    <section class="feature-card">
      <div class="card-text">
        <h4>Mobile Table Ordering</h4>
        <p>
          A simple and hassle-free solution that doesn't require any
          additional learning or installation. This allows your customers to
          place their orders quickly and easily, minimizing wait times and
          improving the overall dining experience. By increasing order volumes
          and streamlining operations, you can maximize your profits and focus
          on providing the best possible service to your customers.
        </p>
      </div>
      <div class="card-image">
        <img src="/svg/MobileTableOrdering.svg" alt="Mobile Table Ordering"/>
      </div>
    </section>

    <section class="feature-card-reverse">
      <div class="card-text">
        <h4>Point Of Sale System</h4>
        <p>
          A fusion of new and reliable technologies, providing a seamless and
          integrated solution for your restaurant operations. With Order
          Chimps POS, you can sync onsite and online orders on the same
          display, making it easier to manage and fulfil orders. It also
          provides enhanced reporting and management capabilities, helping you
          streamline your operations and make informed business decisions.
        </p>
      </div>
      <div class="card-image">
        <img src="/svg/PointofSaleSystem.svg" alt="Pointof Sale System"/>
      </div>
    </section>

    <section class="feature-card">
      <div class="card-text">
        <h4>Fast Mobile Payments</h4>
        <p>
          Accept instant payments from your customers, providing them with a
          fast and hassle-free payment experience. Your customers can order
          tableside and pay using their own devices, such as their
          smartphones, which not only saves them time, but also enhances their
          overall experience at your restaurant. Our mobile payment system is
          secure and easy to use, with features like encryption and
          tokenization to protect against fraud.
        </p>
      </div>
      <div class="card-image">
        <img src="/svg/FastMobilePayments.svg" alt="Fast Mobile Payments"/>
      </div>
    </section>
  </div>

  <div class="hero-btns-container" id="hero-btns-container-e-commerce">
    <span class="demo-button">
      <a class="animated-btn" href="/?subject=hybrid-pos"> Upgrade Your POS Now!</a>
    </span>
  </div>
@endsection