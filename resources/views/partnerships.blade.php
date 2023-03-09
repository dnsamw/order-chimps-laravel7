@extends('layouts.frontend')

@push('partnerships-css')
    <link rel="stylesheet" href="{{asset('dist/css/partnerships.css')}}">
@endpush

@section('title')
    {{'Partnerships'}}
@endsection

@push('validate-js')
    <script src="{{asset('dist/js/validate.js')}}"></script>
@endpush

@section('content')

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
                  <br />
            </div>
              </div>
            </div>
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