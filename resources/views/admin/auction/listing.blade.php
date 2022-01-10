@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="h4">Auctions</h4>
                <div class="d-block float-right">
                    <a href="{{ url('admin/auctions/add') }}" class="btn btn-success">Add Auction</a>
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
                                <th scope="col">Time</th>
                                <th scope="col">Location</th>
                                <th scope="col">Total Vehicles</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($auctions))
                                <?php $i = 1; ?>
                                @foreach ($auctions as $auction)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $auction->auction_time }}
                                            <span>{{ $auction->auction_date }}</span>
                                        </td>
                                        <td>{{ $auction->auction_location }}</td>
                                        <td>{{ $auction->total_vehicle }}</td>
                                        <td><a href="{{ url('admin/auctions/edit', ['id' => $auction->id]) }}">Edit</a>
                                            &nbsp; <a
                                                href="{{ url('admin/auctions/delete', ['id' => $auction->id]) }}">Delete</a>
                                        </td>
                                        <?php $i++; ?>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
