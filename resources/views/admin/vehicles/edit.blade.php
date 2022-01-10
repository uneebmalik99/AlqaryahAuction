@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif

        @if ($vehicle)
            <h5>Add Listing</h5>
            <form action="{{ url('admin/vehicles/edit', ['id' => $vehicle->id]) }}" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $vehicle->id }}">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Condition</label>
                            <select name="car_condition" id="car_condition" class="form-control"
                                selected="{{ $vehicle->car_condition }}" required>
                                <option disabled="disabled">Choose Condition</option>
                                <option value="used">Used</option>
                                <option value="new">New</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Type</label>
                            <select name="car_type" id="car_type" class="form-control"
                                selected="{{ $vehicle->car_type }}" required>
                                <option disabled="disabled">Choose Car Type</option>
                                <option value="sedan">Sedan</option>
                                <option value="suv">Suv</option>
                                <option value="coupe">Coupe</option>
                                <option value="wagon">Wagon</option>
                                <option value="hatchback">Hatchback</option>
                                <option value="pickup">Pickup</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">VIN</label>
                            <input type="text" class="form-control" name="car_vin" value="{{ $vehicle->car_vin }}"
                                required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Year</label>
                            <input type="text" class="form-control" name="car_year" value="{{ $vehicle->car_year }}"
                                required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Make</label>
                            <input type="text" class="form-control" name="car_make" value="{{ $vehicle->car_make }}"
                                required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Model</label>
                            <input type="text" class="form-control" name="car_model" value="{{ $vehicle->car_model }}"
                                required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Interior Color</label>
                            <select name="car_interior" id="car_interior" class="form-control"
                                selected="{{ $vehicle->car_interior }}" required>
                                <option disabled="disabled">Choose Car Interior</option>
                                <option value="black">Blue</option>
                                <option value="beige">Beige</option>
                                <option value="pale">Pale</option>
                                <option value="gray">Gray</option>
                                <option value="tan">Tan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Exterior Color</label>
                            <select name="car_exterior" id="car_exterior" class="form-control"
                                selected="{{ $vehicle->car_exterior }}" required>
                                <option disabled="disabled">Choose Car Exterior</option>
                                <option value="black">Black</option>
                                <option value="blue">Blue</option>
                                <option value="brown">Brown</option>
                                <option value="golden">Golden</option>
                                <option value="green">Green</option>
                                <option value="gray">Gray</option>
                                <option value="orange">Orange</option>
                                <option value="red">Red</option>
                                <option value="silver">Silver</option>
                                <option value="white">White</option>
                                <option value="yellow">Yellow</option>
                                <option value="burgundly">Budlyrgun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Drive Type</label>
                            <select name="car_drive_type" id="car_drive_type" class="form-control"
                                selected="{{ $vehicle->car_drive_type }}" required>
                                <option disabled="disabled">Choose Car Drive Type</option>
                                <option value="awd">AWD</option>
                                <option value="4wd">4WD</option>
                                <option value="fwd">FWD</option>
                                <option value="rwd">RWD</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Transmission</label>
                            <select name="car_transmission" id="car_transmission" class="form-control"
                                selected="{{ $vehicle->car_transmission }}" required>
                                <option disabled="disabled">Choose Car Transmission</option>
                                <option value="automatic">Automatic</option>
                                <option value="manual">Manual</option>
                                <option value="semi-automatic">Semi Automatic</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Fuel Type</label>
                            <input type="text" class="form-control" name="car_fuel" value="{{ $vehicle->car_fuel }}"
                                required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Mileage</label>
                            <input type="text" class="form-control" name="car_mileage"
                                value="{{ $vehicle->car_mileage }}" required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Specification</label>
                            <select name="car_specification" id="car_specification" class="form-control"
                                selected="{{ $vehicle->car_specification }}" required>
                                <option disabled="disabled">Choose Car Specification</option>
                                <option value="american">American</option>
                                <option value="canadian">Canadian</option>
                                <option value="gcc">GCC</option>
                                <option value="japan">Japan</option>
                                <option value="germany">Germany</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Engine Size</label>
                            <input type="text" class="form-control" name="car_engine"
                                value="{{ $vehicle->car_engine }}" required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Cylenders</label>
                            <input type="text" class="form-control" name="car_cylender"
                                value="{{ $vehicle->car_cylender }}" required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Doors</label>
                            <input type="text" class="form-control" name="car_doors" value="{{ $vehicle->car_doors }}"
                                required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Drive Status</label>
                            <input type="text" class="form-control" name="car_drive_status"
                                value="{{ $vehicle->car_drive_status }}" required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Primary Damage</label>
                            <input type="text" class="form-control" name="car_primary_damage"
                                value="{{ $vehicle->car_primary_damage }}" required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Secondary Damage</label>
                            <input type="text" class="form-control" name="car_secondary_damage"
                                value="{{ $vehicle->car_secondary_damage }}" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label class="form-input-label">Keys</label>
                            <select name="car_keys" id="car_keys" class="form-control"
                                selected="{{ $vehicle->car_keys }}" required>
                                <option disabled="disabled">Choose Car Keys</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h5>Select Vehicle Type</h5>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="form-group">
                            <label class="form-control-label">Vehicle Type</label>
                            <select name="vehicle_type" id="vehicle_type" class="form-control"
                                selected="{{ $vehicle->vehicle_type }}" required>
                                <option disabled="disabled">Choose Vehicle Type</option>
                                <option value="auction_vehicle">Auction Vehicle</option>
                                <option value="buy_now">Buy Now</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="buy_now_price">
                        <div class="form-group">
                            <label class="form-control-label">Buy now price</label>
                            <input type="text" class="form-control" id="car_buy_price" name="car_buy_price"
                                value="{{ $vehicle->car_buy_price }}" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6" id="car_on_bid">
                        <div class="form-group">
                            <label class="form-control-label">Starting Bid(AED)</label>
                            <input type="text" class="form-control" id="car_bid" name="car_bid"
                                value="{{ $vehicle->car_bid }}" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="form-group">
                            <label class="form-control-label">Select Auction</label>
                            <select name="auctionlist_id" id="auctionlist_id" class="form-control"
                                selected="{{ $vehicle->auctionlist_id }}" required>
                                <option disabled>---Select Auction---</option>
                                @if ($vehicle->auctionlist)
                                    @foreach ($vehicle->auctionlist as $record)
                                        <option value="{{ $record->id }}"> Date: {{ $record->auction_date }}
                                            ,<span>Time:
                                                {{ $record->auction_time }}</span></option>
                                    @endforeach
                                @endif
                            </select>
                            {{-- <input type="text" class="form-control" name="car_auction_number" required /> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="description" rows="5" class="form-control"
                                value="{{ $vehicle->description }}"></textarea>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-4 col-12">
                        <div class="form-group">
                            <label>Video</label>
                            <input type="file" class="form-control" name="video" id="video" accept="video/*">
                        </div>
                    </div> --}}
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ url('admin/vehicles/listing') }}" type="button" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Update Vehicle</button>
                </div>

            </form>

        @endif
    </div>

@endsection
