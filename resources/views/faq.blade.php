@extends('layouts.main')

@section('inline_style')
<link rel="stylesheet" href="{{ asset('css/contactUs.css') }}">
<script src="{{ asset('js/app.js') }}" ></script>

@endsection

@section('content')
<div class="page-container container-fluid px-5 py-5">
<div class="container-fluid mt-5">
      <div class="faq">
        <div class="jumbotron pb-4">
          <h2 class="text-center faq-title veh-mb-40">
            Frequently Asked Questions
          </h2>
          <div class="veh-pd-14 veh-mb-40">
            <div class="row">
              <div class="col-lg-6 col-11 d-block mx-auto">
                <div id="accordion">
                  <div class="card">
                    <div
                      class="card-header"
                      data-toggle="collapse"
                      href="#collapseOne"
                    >
                      <a class="card-link">
                        Am I eligible to bid in auction?
                        <i class="fas fa-chevron-down"></i>
                      </a>
                    </div>
                    <div
                      id="collapseOne"
                      class="collapse"
                      data-parent="#accordion"
                    >
                      <div class="card-body">
                        In order to be eligible, you need be present at the physical yard and that is all. You do not need to register or pay any deposit prior to the auction. You presence is what matters the most. 
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div
                      class="card-header"
                      data-toggle="collapse"
                      href="#collapseTwo"
                    >
                      <a class="collapsed card-link">
                        <i class="fas fa-chevron-down"></i>
                          How do I bid on a car?
                      </a>
                    </div>
                    <div
                      id="collapseTwo"
                      class="collapse"
                      data-parent="#accordion"
                    >
                      <div class="card-body">When auction starts, the cars will come lot wise, check the cars lot number which you wish to bid on and then wait for it to come.  The auctioneer will start to explain the features of the car. Your bid will be accepted by simply raising your hand.</div>
                    </div>
                  </div>

                  <div class="card">
                    <div
                      class="card-header"
                      data-toggle="collapse"
                      href="#collapseThree"
                    >
                      <a class="collapsed card-link">
                        <i class="fas fa-chevron-down"></i>
                        How much the value is incremented per bid?
                      </a>
                    </div>
                    <div
                      id="collapseThree"
                      class="collapse"
                      data-parent="#accordion"
                    >
                      <div class="card-body">Usually, 500Dhs is incremented each time you place a bid, but that does not restrict you to place a greater bid than 500Dhs</div>
                    </div>
                  </div>

                  
                </div>
              </div>
              <div class="col-lg-6 col-11 d-block mx-auto">
                <div id="accordion1">
                  <div class="card">
                    <div
                      class="card-header"
                      data-toggle="collapse"
                      href="#collapseFour"
                    >
                      <a class="card-link">
                        How much time do I get to pick up the car?
                        <i class="fas fa-chevron-down"></i>
                      </a>
                    </div>
                    <div
                      id="collapseFour"
                      class="collapse"
                      data-parent="#accordion1"
                    >
                      <div class="card-body">All our customers get to 3 days to pay total payment and pick up the car. When it exceeds 3 days, you will be charged parking fees per day. We will continuously send you mails and messages until the final reminder, after which the car will be relisted in auction and the advance paid will be non-refundable. </div>
                    </div>
                  </div>

                  <div class="card">
                    <div
                      class="card-header"
                      data-toggle="collapse"
                      href="#collapseFive"
                    >
                      <a class="collapsed card-link">
                        <i class="fas fa-chevron-down"></i>
                        How does approval system works?
                      </a>
                    </div>
                    <div
                      id="collapseFive"
                      class="collapse"
                      data-parent="#accordion1"
                    >
                      <div class="card-body">We have approval system where we use red and green light to represent whether the car is going to be sold on that certain bid or not. Red light means that the car is not approve for sale on the bid place while when the light changes to green that mean the car is approved for sale on the given bid. </div>
                    </div>
                  </div>

                  <div class="card">
                    <div
                      class="card-header"
                      data-toggle="collapse"
                      href="#collapseEight"
                    >
                      <a class="collapsed card-link">
                        <i class="fas fa-chevron-down"></i>
                        Do I have to pay any down payment upon winning a car?
                      </a>
                    </div>
                    <div
                      id="collapseEight"
                      class="collapse"
                      data-parent="#accordion"
                    >
                      <div class="card-body">Yes, you need to pay 20% down payment right away. In our policy, bid winner should pay 20% right at the time when you win a car. </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    
</div>
@endsection


@section('scripts')
<script>
      $(document).ready(function () {
        $("#accordion .card").click(function () {
          var icon = $(this).find("i.fas");
          if (icon.hasClass("fa-chevron-down"))
          {
            icon.removeClass("fa-chevron-down");
            icon.addClass("fa-chevron-up");
          }
          else if (icon.hasClass("fa-chevron-up")) {
            icon.removeClass("fa-chevron-up");
            icon.addClass("fa-chevron-down");
          }
        });
      });
    </script>
@endsection