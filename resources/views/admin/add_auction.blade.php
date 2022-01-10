@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        <h5>Add Listing</h5>
        <form action="{{ url('add_auction') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-3 col-md-4 col-10 d-block m-auto">
                    <div class="form-group">
                        <label>Auction Date</label>
                        <input type="date" name="auction_date" class="form-control" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 d-block m-auto">
                    <div class="form-group">
                        <label>Auction Time</label>
                        <input type="time" name="auction_time" class="form-control" required />
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-4 col-10 d-block m-auto">
                    <div class="form-group">
                        <label>Auction Day</label>
                        <input type="text" name="auction_day" class="form-control" required />
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-4 col-10 d-block m-auto">
                    <div class="form-group">
                        <label>Auction Location</label>
                        <input type="text" name="auction_location" class="form-control" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 d-block m-auto">
                    <div class="form-group">
                        <label>Total Vehicle</label>
                        <input type="text" name="total_vehicle" class="form-control" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 d-block m-auto">
                    <div class="form-group">
                        <label>Run & Drive</label>
                        <input type="text" name="run_drive" class="form-control" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 d-block m-auto">
                    <div class="form-group">
                        <label>Bid Increment</label>
                        <input type="text" name="bid_increment" class="form-control" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 d-block m-auto">
                    <div class="form-group">
                        <label>With Keys</label>
                        <input type="text" name="with_keys" class="form-control" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-10 d-block m-auto">
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="filename" class="form-control"
                            accept="application/pdf,application/vnd.ms-excel" required />
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">Create</button>


        </form>
    </div>

@endsection
