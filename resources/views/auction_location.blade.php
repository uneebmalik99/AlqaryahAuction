@extends('layouts.main')

@section('inline_style')
<link rel="stylesheet" href="{{ asset('css/contactUs.css') }}">

@endsection

@section('content') 

<div class="page-container container-fluid px-5 py-5">
    
    <div class="contactus">
        <div class="container-fluid">                  
                    <div class="contact-heading">
                        <h1 class="text-center">Auction Location</h1>
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