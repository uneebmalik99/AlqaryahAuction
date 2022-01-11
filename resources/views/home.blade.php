
@extends('layouts.main')

@section('inline_style')
<link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}">
<style>
    nav{
        background: #30312f;
    }
</style>
@endsection

@section('content')
    <div class="bg-image" style="display:flex; align-items:center; height:300px ">
        <div class="container px-3 text-center" style="color: white">
            <h2 style="color: var(--primary)">ALQARYAH CARS AUCTION</h2>
            <p>
            We provide nearly 1000+ of car sales offers per week!
            Our Auction house located in Sharjah UAE. 
            </p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="near-you">
                        <div class="main-title text-center">
                            <h1 class="main-title f-normal pt-4">Car <span style="color: var(--primary)">Auction</span> Near You</h1>
                        </div>
                        <div class="row m-0 p-0 bg-white item-car">
                            @if ($data)
                                @foreach ($data as $record)
                                    <div class="col-lg-4 col-md-6 car_auction mb-2">
                                        <div class="item-wrap text-center">
                                            <div class="item loading">
                                                <div class="time-left">
                                                    <i class="far fa-clock"></i>
                                                    <span class="text">Live Auction start in 
                                                        <span style="color: var(--primary); font-weight: bold;" data-countdown="{{ $record->dateTime }}"></span>
                                                    </span>
                                                </div>
                                                <div class="auction">
                                                    <div class="name">
                                                        AE - ALQARAYAH Car Auction
                                                        <span>ONSIDE AUCTION ONLY</span>
                                                    </div>
                                                    <div class="adds"></div>
                                                </div>
                                                <div class="actions text-center">
                                                    Date {{ $record->auction_date }}
                                                    Time {{ $record->auction_time }}
                                                </div>
                                                <div class=" my-2" >
                                                    <a href="/all_listings?auction={{$record->id}}"
                                                        class="btn btn-warning">
                                                        view more items
                                                    </a>
                                                </div>

                                                <div>
                                                    <a href="{{ url('download', ['filename' => $record->filename]) }}"
                                                        class="btn btn-danger">
                                                        Download
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script>
        $('[data-countdown]').each(function() {
            var $this = $(this),
                finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime('%D days %H:%M:%S'));
            });
        });
    </script>
@endsection
