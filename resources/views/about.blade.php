@extends('layouts.main')

@section('inline_style')
<link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}">

@endsection

@section('content')
<div class="page-container container-fluid px-5 py-5">
<div class="aboutUs">
      <div class="row">
        <div class="col-lg-8 col-12">
          <div class="">
            <h1 class="about-title mb-30">About <span class="text-primary-new">us</span></h1>
            <p>
              <b>Our Past:</b> <br>
              We are the leading auction in Sharjah; Al Qaryah was one of the first to initiate the 
              used cars auction in industrial areas in Sharjah. Al Qaryah launched in the year 2017, 
              which was the YEAR OF GIVING named by His Highness Sheikh Khalifa bin Zayed Al Nahyan, 
              President of the UAE. Just like the name of the year, we gave our customers the best 
              selection of cars along with best offers. Al Qaryah first opened in Sharjah Industrial area 2. 
              Our aim from the beginning was to provide our customers the best used cars we could possibly 
              get our hands on from around the world and secondly provide our customers with the best services. 
              We always look for positive feedbacks from our audience that help us improve our relationship with our customers.
            </p>
            <b class="d-block">Our AIM and Vision:</b> <br>

            <div class="spec-text">
              <p>
              Our aim is quite simple, it is to provide the best services and products to our customers and improve our relationship with our customers by getting and working on their feedbacks. 
              </p>
            </div>
            <p>
              Our vision is that we will strive to become the best auction not only in UAE, but where-ever our dear customers are at. This could be done by updating ourselves with the technology requirements and changing according to the situation of the world and the requirements of our customers. Expanding our auction so that every one of our customers could reach us easily.
            </p>
            <p>
              <b>Our Products:</b> <br>
              What makes us different from others? It is quite simple; our product is the reason. We provide the best products that we/anyone could get for customers. We always bring the latest model cars and the trends around the world. We have wide selection of car brands with all ranges of prices and models. 
              <br> <br>
              From SUV to Sedan, from convertible to coupe, micro to pick-up, super car to hatchback, mini-van to Van, and from bike to wagon, you can buy all varieties of cars from Al Qaryah Auction.
              <br> <br>
              In addition to that, we bring the best offers for our customers on special occasions. Some of these offers are like get a coupon upon buying a car to win special offers like a car, mobile phones, percentage discount and many more to come.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="veh-img" style="background-image: url({{ asset('images/about/IMG_6965.JPG') }})"></div>
        </div>
        <div class="col-12 py-3">
          <div class="float-right">
            <div class="social-icons">
              <div class="marg-3">
                <p class="veh-follow">Follow us</p>
              </div>
              <div class="soc-icons">
                <div class="icon-content">
                      <a href="https://www.facebook.com/alqaryahcarsauction/">
                          <i class="fab fa-facebook-f"></i>
                      </a>
                </div>
              </div>
              <!-- <div class="soc-icons">
                  <div class="icon-content">
                      <a href="#">
                          <i class="fab fa-twitter"></i>
                      </a>
                  </div>
              </div> -->
              <div class="soc-icons">
                  <div class="icon-content">
                      <a href="https://www.instagram.com/alqaryah_auction/">
                          <i class="fab fa-instagram"></i>
                      </a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-dark">
        <div class="row">
          <div class="col-lg-4 col-12"></div>
          <div class="col-lg-8 col-12"></div>
        </div>
      </div>

      <div class="row mb-30">
        <div class="col-lg-6 col-12">
          <div class="meeting-img" style="background-image: url({{ asset('images/about/IMG_6891.JPG') }})"></div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="meeting-img" style="background-image: url({{ asset('images/about/IMG_6892.JPG') }})"></div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="meeting-img" style="background-image: url({{ asset('images/about/IMG_6890.JPG') }})"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-lg-6 col-12">
          <div class="row">
            <div class="col-6">
              <div class="meeting-img"></div>
            </div>
            <div class="col-6">
              <div class="meeting-img"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="row">
            <div class="col-6">
              <div class="meeting-img"></div>
            </div>
            <div class="col-6">
              <div class="meeting-img"></div>
            </div>
          </div>
        </div>
      </div> -->
      
    </div>
    
</div>
@endsection


@section('scripts')
    <script>
      $(document).ready(function () {
        $("#accordion .card .card-link").click(function () {
          if ($(this).find("i.fas").hasClass(".fa-chevron-down")) {
            $(this).find("i").removeClass("fa-chevron-down");
            $(this).find("i").addClass("fa-chevron-up");
            console.log(this);
          }
        });
        $("#accordion1 .card .card-link").click(function () {
          if ($(this).find("i.fas").hasClass("fa-chevron-down"));
          {
            $(this).find("i.fas").removeClass("fa-chevron-down");
            $(this).find("i.fas").addClass("fa-chevron-up");
          }
        });
      });
    </script>
@endsection