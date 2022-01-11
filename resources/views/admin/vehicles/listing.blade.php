@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="h4">Car Auction Listing</h4>
                <div class="d-block float-right">
                    <a href="{{ url('admin/vehicles/add') }}" class="btn btn-success">Add cars</a>
                </div>
                <div class="d-block float-left">
                    @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                </div>
                <div class="table-responsive p-4">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Car</th>
                                <th scope="col">Vehicle Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($vehicles))
                                <?php $i = 1; ?>
                                @foreach ($vehicles as $vehicle)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td><span>{{ $vehicle->car_make }}</span>
                                            &nbsp;<span>{{ $vehicle->car_model }}</span>
                                            &nbsp;<span>{{ $vehicle->car_year }}</span>
                                        </td>
                                        <td>{{ $vehicle->vehicle_type }}</td>
                                        <td>
                                            @if ($vehicle->vehicle_type == 'auction_vehicle')
                                                {{ $vehicle->car_bid }}
                                            @else
                                                {{ $vehicle->car_buy_price }}
                                            @endif
                                        </td>
                                        <td><a href="{{ url('admin/vehicles/edit', ['id' => $vehicle->id]) }}">Edit</a>
                                            &nbsp; <a
                                                href="{{ url('admin/vehicles/delete', ['id' => $vehicle->id]) }}">Delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
