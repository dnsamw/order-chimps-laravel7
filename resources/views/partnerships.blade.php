@extends('layouts.frontend')

@push('partnerships-css')
    <link rel="stylesheet" href="{{asset('dist/css/partnerships.css')}}">
@endpush

@section('title')
{{'Partnerships'}}
@endsection

@section('description')
{{'Are you an influencer or reseller looking to partner with a tech startup in the hospitality industry? Connect with us now for exciting opportunities and exclusive rewards!'}}
@endsection

@push('validate-js')
    <script src="{{asset('dist/js/validate.js')}}"></script>
@endpush

@section('content')

{{-- form alert messages --}}

<div class="alert-wrapper" id="alert-wrapper">
  <div class="submit-message-container">
      <span style="text-align: center">
          Please wait your message is sending..
      </span>

      <!-- GRADIENT SPINNER -->
      <div class="loading"></div>
  </div>
</div>


{{-- form alert messages --}}

<section class="partners-content" id="main">
    <section class="showcase">
      <div class="text-wrapper">
        <h3
          class="animate__animated animate__fadeInLeft animate__delay-100ms"
        >
          Partnerships
        </h3>
        <p class="animate__animated animate__fadeInLeft animate__delay-200ms">
          Are you a reseller or influencer looking for an innovative and
          reliable technology partner? Join forces with Order Chimps and
          unlock exciting opportunities. Let's collaborate to bring
          exceptional value to customers and make a positive impact in the
          industry. Contact us today to learn more about our partnership
          programs.
        </p>
        <h3
          class="animate__animated animate__fadeInLeft animate__delay-100ms"
          style="text-align: center"
        >
          are you a...
        </h3>
        <div class="choice-container">
          <form method="POST" enctype="multipart/form-data" action="{{route('partner.send')}}" id="oc_partner_form">
            @csrf
            
              <div class="options-wrapper">
                <div class="partner-option">
                  <h4>
                    <span class="doodle-sun"> reseller </span>
                  </h4>
                  <label class="switch">
                    <input id="reseller_check_box" name="reseller" type="checkbox" />
                    <span class="slider round"></span>
                  </label>
                </div>
                <div class="partner-option">
                  <h4>
                    <span class="doodle-sun"> influencer </span>
                  </h4>
                  <label class="switch">
                    <input id="influencer_check_box" name="influencer" type="checkbox" checked />
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
              <div class="subscribe">
                <div class="form-input">
                  <!-- <label for="email"></label> -->
                  <input 
                  octavalidate="R,EMAIL" 
                  id="inp_partneremail" 
                  type="email" 
                  name="email" 
                  placeholder="Your Email" />
                  <button type="submit" class="subscribe-btn">Let's collaborate</button>
            </div>
              </div>
            </div>

            @if (Session::has('message_sent'))

            <div class="alert-wrapper-2 active-flex" id="alert-wrapper-2">
                <div class="submit-message-container">
                    <span id="form-popup-close-icon">
                        <a class="bubble-btn">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                stroke="#ffb627"
                                viewBox="0 0 24 24"
                                stroke-width="1"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12"
                                ></path>
                            </svg>
                        </a>
                    </span>
                <span style="text-align: center" >{{Session::get('message_sent')}}</span>
            </div>
            </div>
            <script>
                const formPopupCloseBtn = document.querySelector(
                    "#form-popup-close-icon"
                );
                formPopupCloseBtn.addEventListener("click", (e) => {
                   const alertBox =  document.querySelector("#alert-wrapper-2")
    
                    console.log(e.target,alertBox);
                    alertBox.classList.remove("active-flex");
                    alertBox.style.display = "none";
                    //document.querySelector("#alert-wrapper-2").classList.remove("active-flex");
                });
            </script>
           @endif

          </form>
          <script>
            const partnerFormRef = document.querySelector('#oc_partner_form');
            //create new instance of the function
            const prtnerForm = new octaValidate('oc_partner_form');

            //listen for submit event
            partnerFormRef.addEventListener('submit', function(e){
              e.preventDefault();
              //invoke the method
              if(prtnerForm.validate() === true){ 
                //validation successful, process form data here
                document.querySelector("#alert-wrapper").style.display = "flex";
                partnerFormRef.submit()
              } else {
                //validation failed
                console.log("Validaton Failed!")
              }
            })</script>
        </div>
      </div>
      <div class="video-wrapper animate__animated animate__fadeInRight">
        <img src="/svg/partnership.svg" alt="Partnerships"  />
      </div>
    </section>
  </section>
  <script>
    const influencerCheckBox = document.getElementById(
      "influencer_check_box"
    );
    const resellerCheckBox = document.getElementById("reseller_check_box");

    influencerCheckBox.addEventListener("click", (e) => {
      if (e.target.checked) {
        resellerCheckBox.checked = false;
      } else {
        resellerCheckBox.checked = true;
      }
    });
    resellerCheckBox.addEventListener("click", (e) => {
      if (e.target.checked) {
        influencerCheckBox.checked = false;
      } else {
        influencerCheckBox.checked = true;
      }
    });
  </script>
@endsection