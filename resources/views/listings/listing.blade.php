@extends('layouts.main')

@section('inline_style')
<style>
    <style>
        
        nav{
            background: #0f141e;
        }
        .swiper-container {
            width: 100%;
            height: 420px;
            margin-left: auto;
            margin-right: auto;
        }
        .swiper-slide {
            background-size: cover; 
            background-position: center;
            border-radius: 15px;
        }
        .gallery-top {
            /* height: 80%; */
            width: 100%;
        }
        .gallery-thumbs {
            height: 125px;
            box-sizing: border-box;
            padding: 10px 0;
        }
        .gallery-thumbs .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }
        .gallery-thumbs .swiper-slide-thumb-active {
            opacity: 1;
            border:2px solid var(--primary)
        }   

        /* vehicle specs start */
        .vehicle-specification {
            display: flex;
            flex-wrap: wrap;
            padding: 20px 45px;
            background: #f2f5fb;
            border-radius: 15px;
        }
        .vehicle-specification > div {
            flex-basis: 100%;
            margin-bottom: 6px;
        }
        .vehicle-spec-make > .label {
            font-weight: bold;
            text-transform: uppercase;
        }
        .vehicle-spec-make{
            display: flex;
        }
        .vehicle-spec-make > div{
            flex-basis: 50%;
        }
        
        .video{
            width: 100%;
        }
        .video-container{
            position: relative;
            width: 100%;
            overflow: hidden;
            padding-top: 56.25%;
        }
        .video iframe{
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .feature-item {
            flex: 0 0 33%;
            position: relative;
            margin-bottom: 7px;
        }

        span.feature-item__bullet {
            position: absolute;
            top: 0;
            color: var(--primary);
            font-size: 25px;
            line-height: 20px;
            float: left;
        }

        span.feature-item__name {
            padding-left: 22px;
        }

        .features-container {
            display: flex;
            flex-wrap: wrap;
        }

        .attacment-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
        }

        .attacment-item__icon {
            width: 50px;
        }

        .attacment-item__text {
            margin-left: 15px;
        }
        .attacment-item__text:hover {
            color:var(--primary);
            cursor:pointer;
        }
        .mobile-item{
            display:none;
        }
        .description, .video{
            display: none
        }
        .page-container{
            max-width: 1300px;
        }
        @media screen and (max-width: 991px){
            .swiper-container {
                height: 230px;
            }
            .feature-item {
                flex: 0 0 50%;
            }
            .desktop-view-specs{
                display: none;
            }
            .mobile-item{
                display:block;
            }
        }
        @media screen and (max-width: 550px){
            .page-container{
                padding: 20px 15px !important;
            }
            .mobile-item h2{
                font-size: 25px;
            }
            .swiper-container {
                height: 320px;
            }
            .swiper-container.gallery-thumbs{
                display: none;
            }
        }

        @media screen and (max-width: 400px){
            .swiper-container {
                height: 230px;
            }
            .feature-item {
                flex: 0 0 50%;
            }
        }
    </style>

</style>
@endsection

@section('content')
<div class="page-container container-fluid px-5 py-5">
        <!-- Swiper -->

        <div class="row">
            <div class="col-md-7">
                <div class="mobile-item vehicle-title pb-4">
                    <h3 id="vehicle-heading">BMW 8-serie 2-door coupe grey</h3>
                    <div class="text-secondary pb-2 border-bottom">
                        <span id="vehicle-year">2021</span> <span class="text-primary-new">|</span> <span id="vehicle-type">Coupe</span> <span class="text-primary-new">|</span> <span id="vehicle-fuel">Petrol</span>
                    </div>
                </div>
                <div class="slider-main">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            @foreach($data->images as $img)
                                <div class="swiper-slide" style="background-image:url('{{asset('images').'/'.$img->image}}')"></div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            @foreach($data->images as $img)
                                <div class="swiper-slide" style="background-image:url('{{asset('images').'/'.$img->image}}')"></div>
                            @endforeach

                        </div>
                    </div>
                </div>
    
                <div class="">
                <div class="mobile-item">
                        <h2 class="py-3" style="font-weight: 700; color: var(--primary);">
                            <i class="fa fa-gavel"></i> Starting BID: AED 500
                        </h2>
                        <div class="vehicle-specification">
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Make: 
                                </div>
                                <div class="value">
                                    {{$data->car_make}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Model:
                                </div>
                                <div class="value">
                                    {{$data->car_model}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Doors:
                                </div>
                                <div class="value">
                                    {{$data->car_doors}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Drive Type:
                                </div>
                                <div class="value">
                                    {{$data->car_drive_type}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Transmission:
                                </div>
                                <div class="value">
                                    {{$data->car_transmission}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Condition:
                                </div>
                                <div class="value">
                                    {{$data->car_condition}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Year:
                                </div>
                                <div class="value">
                                    {{$data->car_year}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Fuel Type:
                                </div>
                                <div class="value">
                                    {{$data->car_fuel}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Engine Size:
                                </div>
                                <div class="value">
                                    {{$data->car_engine}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Doors:
                                </div>
                                <div class="value">
                                    {{$data->car_doors}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    Cylinders:
                                </div>
                                <div class="value">
                                    {{$data->car_cylender}}
                                </div>
                            </div>
                            <div class="vehicle-spec-make">
                                <div class="label">
                                    VIN:
                                </div>
                                <div class="value">
                                {{$data->car_vin}}
                                </div>
                            </div>
                        </div>
                        <div class="m-contact-buttons">
                            <div class="vehicel-contact-buttons">
                                <div class="w-100 btn btn-lg btn-outline-warning my-2 mt-3"> <i class="fa fa-phone mr-2"></i> +971 56 403 0184</div>
                                <div class="w-100 btn btn-lg btn-success my-2" data-href="https://wa.me/+971564030184"> <i class="fab fa-whatsapp mr-2"></i> Chat with whatsapp</div>
                                <div class="w-100 btn btn-lg btn-warning my-2" data-href="https://wa.me/+971564030184"> <i class="far fa-comment mr-2"></i> Send Message</div>
                
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <h4 class="py-4">
                            Description
                        </h4>
                        <div class="description-content">
                            How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr. Fogg’s manoeuvre simply glorious. The captain had said “between eleven and twelve knots,” and the Henrietta confirmed his prediction.
                            <br><br>
                            If, then—for there were “ifs” still—the sea did not become too boisterous, if the wind did not veer round to the east, if no accident happened to the boat or its machinery, the Henrietta might cross the three thousand miles from New York to Liverpool in the nine days, between the 12th and the 21st of December. It is true that, once arrived, the affair on board the Henrietta, added to that of the Bank of England, might create more difficulties for Mr. Fogg than he imagined or could desire.
                            <br><br>
                            During the first days, they went along smoothly enough. The sea was not very unpropitious, the wind seemed stationary in the north-east, the sails were hoisted, and the Henrietta ploughed across the waves like a real trans-Atlantic steamer.
                        
                        </div>
                        <a href="">Show More</a>
                    </div>
        
                    <div class="video">
                        <h4 class="py-4">
                            Video
                        </h4>
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/_Yx5bh853vU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
        
                    <div class="features" style="display: none">
                        <h4 class="py-4">
                            Features
                        </h4>
                        <div class="features-container">
                            <div class="feature-item">
                                <span class="feature-item__bullet">
                                    •
                                </span>
                                <span class="feature-item__name">
                                    Keyless start
                                </span>
                            </div>
        
                            <div class="feature-item">
                                <span class="feature-item__bullet">
                                    •
                                </span>
                                <span class="feature-item__name">
                                    Keyless start
                                </span>
                            </div>
        
                            <div class="feature-item">
                                <span class="feature-item__bullet">
                                    •
                                </span>
                                <span class="feature-item__name">
                                    Keyless start
                                </span>
                            </div>
        
                            <div class="feature-item">
                                <span class="feature-item__bullet">
                                    •
                                </span>
                                <span class="feature-item__name">
                                    Keyless start
                                </span>
                            </div>
        
                            <div class="feature-item">
                                <span class="feature-item__bullet">
                                    •
                                </span>
                                <span class="feature-item__name">
                                    Keyless start
                                </span>
                            </div>
        
                            <div class="feature-item">
                                <span class="feature-item__bullet">
                                    •
                                </span>
                                <span class="feature-item__name">
                                    Keyless start
                                </span>
                            </div>
        
                            <div class="feature-item">
                                <span class="feature-item__bullet">
                                    •
                                </span>
                                <span class="feature-item__name">
                                    Keyless start
                                </span>
                            </div>
                        </div>
                    </div>
        
                    <div class="attachments" style="display: none">
                        <h4 class="py-4">
                            Attachments
                        </h4>
                        <div class="attachment-container">
                            <div class="attacment-item">
                                <div class="attacment-item__icon">
                                    <img src="https://demo.vehica.com/wp-content/themes/vehica/assets/img/pdf.svg" alt="Sample PDF File">
                                </div>
                                <div class="attacment-item__text">
                                    Sample PDF
                                </div>
                            </div>
        
                            <div class="attacment-item">
                                <div class="attacment-item__icon">
                                    <img src="https://demo.vehica.com/wp-content/themes/vehica/assets/img/zip.svg" alt="Notes and some related files">                        </div>
                                <div class="attacment-item__text">
                                    Sample Zip file
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        
            <div class="pl-5 col-lg-5 col-md-12 desktop-view-specs">
                <div style="position: sticky; top: 20px;">
                    <h3 id="vehicle-heading">{{$data->car_make.' '.$data->car_model}}</h3>
                    <div class="text-secondary pb-2 border-bottom">
                        <span id="vehicle-year">
                            {{$data->car_year}}
                        </span> 
                        <span class="text-primary-new">•</span>
                        <span id="vehicle-type">
                            {{$data->car_type}}
                        </span> 
                        <span class="text-primary-new">•</span> 
                        <span id="vehicle-fuel">
                            {{$data->car_fuel}}
                        </span>
                    </div>
                    <h2 class="py-3" style="font-weight: 700; color: var(--primary);">
                        <i class="fa fa-gavel"></i> Starting BID: AED {{$data->car_bid}}
                    </h2>
                    <div class="vehicle-specification">
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Make: 
                            </div>
                            <div class="value">
                                {{$data->car_make}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Model:
                            </div>
                            <div class="value">
                                {{$data->car_model}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Doors:
                            </div>
                            <div class="value">
                                {{$data->car_doors}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Drive Type:
                            </div>
                            <div class="value">
                                {{$data->car_drive_type}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Transmission:
                            </div>
                            <div class="value">
                                {{$data->car_transmission}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Condition:
                            </div>
                            <div class="value">
                                {{$data->car_condition}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Year:
                            </div>
                            <div class="value">
                                {{$data->car_year}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Fuel Type:
                            </div>
                            <div class="value">
                                {{$data->car_fuel}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Engine Size:
                            </div>
                            <div class="value">
                                {{$data->car_engine}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Doors:
                            </div>
                            <div class="value">
                                {{$data->car_doors}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                Cylinders:
                            </div>
                            <div class="value">
                                {{$data->car_cylender}}
                            </div>
                        </div>
                        <div class="vehicle-spec-make">
                            <div class="label">
                                VIN:
                            </div>
                            <div class="value">
                            {{$data->car_vin}}
                            </div>
                        </div>
                    </div>
                    <div class="vehicel-contact-buttons">
                        <div class="w-100 btn btn-lg btn-outline-warning my-2 mt-3"> <i class="fa fa-phone mr-2"></i> +971 56 403 0184</div>
                        <div class="w-100 btn btn-lg btn-success my-2" data-href="https://wa.me/+971564030184"> <i class="fab fa-whatsapp mr-2" ></i> Chat with whatsapp</div>
                        <div class="w-100 btn btn-lg btn-warning my-2" data-href="https://wa.me/+971564030184"> <i class="far fa-comment mr-2"></i> Send Message</div>
        
                    </div>
                </div>
            </div>
                
        </div>
        
       
        
    </div>
@endsection


@section('scripts')
<script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 6,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });
  </script>
@endsection