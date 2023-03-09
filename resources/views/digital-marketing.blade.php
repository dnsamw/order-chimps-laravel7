@extends('layouts.frontend')

@push('d-marketing-css')
    <link rel="stylesheet" href="{{asset('dist/css/d-marketing.css')}}">
@endpush

@section('title')
    {{'Digital Marketing'}}
@endsection

@section('content')
<div class="container" id="main">
    <section class="showcase">
      <div class="text-wrapper">
        <h3
          class="animate__animated animate__fadeInLeft animate__delay-100ms"
        >
          Digital Marketing
        </h3>
        <p class="animate__animated animate__fadeInLeft animate__delay-200ms">
          Are you looking to reach more customers and increase sales? Look no
          further than the world of digital marketing! Order Chimps
          specializes in digital media marketing through platforms such as
          Instagram, Facebook, TikTok and Google. Increase brand awareness,
          improve customer engagement, create targeted advertising campaigns,
          attract influencers, and utilize data analytics to optimize
          marketing efforts over time. Don't miss out on the opportunity to
          connect with your customers and take your business to the next
          level!
        </p>
      </div>
      <div class="image-wrapper animate__animated animate__fadeInRight">
        <img src="/svg/DigitalMarketing.svg" alt="Digital Marketing"/>
      </div>
    </section>

    <section class="2-col-grid">
      <div class="flexbox">
        <div class="leftside grid-card">
          <h1>Increase Brand Awareness</h1>
          <ul class="custom-bullet doodle-dot">
            <li>
              Effective social media marketing campaigns to increase business
              visibility
            </li>
            <li>Reach a wider audience and increase brand awareness</li>
          </ul>
        </div>
        <div class="rightside grid-card">
          <h1>Improve Customer Engagement</h1>
          <ul class="custom-bullet doodle-dot">
            <li>Improve customer engagement and increase loyalty</li>
            <li>Meaningful interactions through social media marketing</li>
            <li>
              Increased customer retention, lifetime value, and profitability
            </li>
          </ul>
        </div>
      </div>
      <div class="flexbox">
        <div class="leftside grid-card">
          <h1>Targeted Advertising Campaigns</h1>
          <ul class="custom-bullet doodle-dot">
            <li>
              Targeted advertising campaigns to reach the right people at the
              right time
            </li>
            <li>
              Increased conversions, more cost-effective spend, and higher ROI
            </li>
          </ul>
        </div>
        <div class="rightside grid-card">
          <h1>Attract Influencers</h1>
          <ul class="custom-bullet doodle-dot">
            <li>
              Attract influencers to your restaurant through social media
              marketing
            </li>
            <li>Increased exposure, brand awareness, and sales</li>
          </ul>
        </div>
      </div>

      <div class="flexbox">
        <div class="leftside grid-card">
          <h1>Utilize Data Analytics</h1>
          <ul class="custom-bullet doodle-dot">
            <li>Utilize data analytics to optimize marketing efforts</li>
            <li>Understand what's working and what can be improved</li>
            <li>
              More efficient marketing spend, increased conversions, and
              higher ROI
            </li>
          </ul>
        </div>
        <div class="rightside grid-card">
          <h1>Online Reputation Management (ORM)</h1>
          <ul class="custom-bullet doodle-dot">
            <li>
              Customized services to monitor and manage online reputation
            </li>
            <li>
              Respond to reviews, resolve complaints, and highlight positive
              reviews
            </li>
            <li>
              Attract more customers, increase retention, and generate more
              revenue.
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>

  <div class="hero-btns-container" id="hero-btns-container-e-commerce">
    <span class="demo-button">
      <a class="animated-btn" href="/?subject=digital-marketing">Start Your Campaign!</a>
    </span>
  </div>
@endsection