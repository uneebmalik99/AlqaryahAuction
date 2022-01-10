@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('admin/auctions/listing') }}">Auction Listing</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('admin/vehicles/listing') }}">Car auctions</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="#">Feedback</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
