@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        <h5>Add Listing</h5>
        <form action="{{ url('addToAuction') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Condition</label>
                        <select name="car_condition" id="car_condition" class="form-control" required>
                            <option selected="true" disabled="disabled">Choose Condition</option>
                            <option value="used">Used</option>
                            <option value="new">New</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Type</label>
                        <select name="car_type" id="car_type" class="form-control" required>
                            <option selected="true" disabled="disabled">Choose Car Type</option>
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
                        <input type="text" class="form-control" name="car_vin" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Year</label>
                        <input type="text" class="form-control" name="car_year" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Make</label>
                        <input type="text" class="form-control" name="car_make" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Model</label>
                        <input type="text" class="form-control" name="car_model" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Interior Color</label>
                        <select name="car_interior" id="car_interior" class="form-control" required>
                            <option selected="true" disabled="disabled">Choose Car Interior</option>
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
                        <select name="car_exterior" id="car_exterior" class="form-control" required>
                            <option selected="true" disabled="disabled">Choose Car Exterior</option>
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
                        <select name="car_drive_type" id="car_drive_type" class="form-control" required>
                            <option selected="true" disabled="disabled">Choose Car Drive Type</option>
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
                        <select name="car_transmission" id="car_transmission" class="form-control" required>
                            <option selected="true" disabled="disabled">Choose Car Transmission</option>
                            <option value="automatic">Automatic</option>
                            <option value="manual">Manual</option>
                            <option value="semi-automatic">Semi Automatic</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Fuel Type</label>
                        <input type="text" class="form-control" name="car_fuel" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Mileage</label>
                        <input type="text" class="form-control" name="car_mileage" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Specification</label>
                        <select name="car_specification" id="car_specification" class="form-control" required>
                            <option selected="true" disabled="disabled">Choose Car Specification</option>
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
                        <input type="text" class="form-control" name="car_engine" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Cylenders</label>
                        <input type="text" class="form-control" name="car_cylender" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Doors</label>
                        <input type="text" class="form-control" name="car_doors" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Drive Status</label>
                        <input type="text" class="form-control" name="car_drive_status" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Primary Damage</label>
                        <input type="text" class="form-control" name="car_primary_damage" required />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Secondary Damage</label>
                        <input type="text" class="form-control" name="car_secondary_damage" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="form-input-label">Keys</label>
                        <select name="car_keys" id="car_keys" class="form-control" required>
                            <option selected="true" disabled="disabled">Choose Car Keys</option>
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
                        <select name="vehicle_type" id="vehicle_type" class="form-control" required>
                            <option selected="true" disabled="disabled">Choose Vehicle Type</option>
                            <option value="auction_vehicle">Auction Vehicle</option>
                            <option value="buy_now">Buy Now</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6" id="buy_now_price">
                    <div class="form-group">
                        <label class="form-control-label">Buy now price</label>
                        <input type="text" class="form-control" id="car_buy_price" name="car_buy_price" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6" id="car_on_bid">
                    <div class="form-group">
                        <label class="form-control-label">Starting Bid(AED)</label>
                        <input type="text" class="form-control" id="car_bid" name="car_bid" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="form-group">
                        <label class="form-control-label">Select Auction</label>
                        <select name="auctionlist_id" id="auctionlist_id" class="form-control" required>
                            <option selected disabled>---Select Auction---</option>
                            @if ($data)
                                @foreach ($data as $record)
                                    <option value="{{ $record->id }}"> Date: {{ $record->auction_date }} ,<span>Time:
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
                        <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="form-group">
                        <label>Video</label>
                        <input type="file" class="form-control" name="video" id="video" accept="video/*">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="jumbotron drop-zone" id="singledrop">

                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="jumbotron dropzone" id="mutlidrop">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">

                    </div>
                    <div class="col-lg-6 col-12">
                        <button type="submit" class="btn btn-danger">Add Listing</button>
                    </div>
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                </div>
            </div>

        </form>

        <input type="hidden" id="auction_id">
    </div>
    <style>
        .drop-zone-image {
            display: none;
        }

        .thumbnail {

            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
        }

    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/min/dropzone.min.js"
        integrity="sha512-KgeSi6qqjyihUcmxFn9Cwf8dehAB8FFZyl+2ijFEPyWu4ZM8ZOQ80c2so59rIdkkgsVsuTnlffjfgkiwDThewQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript">
        setSelectBox();

        function setSelectBox() {
            $.ajax({
                url: '/getAuction',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $('#auction_id').val(data.id);
                }
            });
        }

        function deleteGalleryFile(file) {
            if (file) {
                $.ajax({
                    url: '/deleteGalleryFile/' + file,
                    method: 'get',
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            }
        }
        var id = $('#auction_id').val();
        var url = "/dropzone_store/" + id;
        $("div#mutlidrop").dropzone({
            url: url,
            method: "post",
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            init: function() {
                this.on('removedfile', function(file) {
                    if (file) {
                        deleteGalleryFile(file.upload.filename)
                        console.log('file', file.upload.filename)
                    }
                });
            },
            success: function(file, response) {
                console.log(response);
            },
            error: function(file, response) {
                console.log(response)
                return false;
            }
        });
    </script>

    <script type="text/javascript">
        $(document).on('change', '#vehicle_type', function() {
            console.log($('#auction_id').val())
            $veh = $(this).val();
            if ($veh === 'auction_vehicle') {
                $('#buy_now_price').hide();
                $('#car_on_bid').show();
            } else {
                $('#buy_now_price').show();
                $('#car_on_bid').hide();
            }
        });


        function deleteImageFile(file) {
            if (file) {
                $.ajax({
                    url: '/deleteImageFile/' + file,
                    method: 'get',
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            }
        }
        var id = $('#auction_id').val();
        var url = "/single_store/" + id;
        $("div#singledrop").dropzone({
            url: url,
            method: "post",
            maxFilesize: 1,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            init: function() {
                this.on('removedfile', function(file) {
                    if (file) {
                        deleteImageFile(file.upload.filename)
                        console.log('file', file.upload.filename)
                    }
                });
            },
            success: function(file, response) {
                console.log(response);
            },
            error: function(file, response) {
                return false;
            }
        });
    </script>
@endsection
