@extends('layouts.main')

@section('inline_style')
<link rel="stylesheet" href="{{ asset('css/contactUs.css') }}">

@endsection

@section('content')
<div class="page-container container-fluid px-5 py-5">
    <div class="contactus">
        <div class="container-fluid">
            <div class="row" style="margin-bottom: 40px;">
                <div class="col-lg-6 col-md-11 d-block mx-auto">
                    <div class="contact-heading">
                        <h1>Contact us</h1>
                    </div>
                    <div class="contact-desc">
                        <p>If you need help with any aspect of the buying process, please don’t hesitate to ask us.
                            <br>Our customer service representatives will be happy to assist you in any way.
                            <br>Whether through email, phone or in person, we’re here to help you get the customer service you deserve.</p>
                    </div>
                    <div class="veh-addr">
                        <a href="#" target="_blank" class="veh-loc text-dark d-block">
                            <span>Al Qaryah auction, Ind. Area 2</span>
                        </a>
                        <a href="#" class="text-dark veh-loc" target="_blank">
                            <span>Sharjah, UAE</span>
                        </a>
                    </div>
                    <div class="vehica-phone">
                        <a href="https://wa.me/+971564030184 " class="veh-phone d-block mb-3">
                        <i class="fab fa-whatsapp mr-2"></i><span>+971</span> 56 403 0184 
                        </a>
                        <a href="#" class="text-dark veh-mail"><i class="far fa-envelope fa-1.5x mr-2"></i> contact@alqaryahauction.com</a>
                        <div class="other-phones py-2">
                            <span>+971 56 683 7564 </span> <br>
                            <span>+971 56 683 7564 </span> <br>
                            <span>+971 56 683 7564 (telephone no.) </span>

                        </div>
                    </div>
                    <div class="social-icons my-3">
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
                <div class="col-lg-6 col-md-11 d-block mx-auto">
                   <div class="jumbotron p-3">
                       <div class="row">
                           <div class="col-12 col-lg-4">
                               <div class="form-group">
                                   <input type="text" class="form-control" placeholder="Name">
                               </div>
                           </div>
                           <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                       </div>
                       <div class="form-group">
                           <textarea name="" cols="40" rows="10" class="form-control" placeholder="Message*"></textarea>
                       </div>
                       <div class="row">
                           <div class="col-6 d-flex align-items-end">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I accept <span>privacy policy</span></label>
                              </div>
                           </div>
                           <div class="col-6">
                                <div class="form-group text-right">
                                    <button class="btn btn-submit">Send</button>
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14426.373025752437!2d55.4013127!3d25.3178663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x922fc8ea8c586940!2sAl%20Qaryah%20cars%20auction!5e0!3m2!1sen!2s!4v1638474464314!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection


@section('scripts')

@endsection