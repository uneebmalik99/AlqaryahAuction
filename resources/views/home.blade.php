<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vehica Auctions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css"
        integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}">
</head>

<body style="background-color: #f5f5f5">
    <div class="bg-image"></div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="near-you">
                        <div class="main-title text-center">
                            <h2 class="main-title f-normal">Car Auction Near You</h2>
                        </div>
                        <div class="row m-0 p-0 bg-white item-car">
                            @if ($data)
                                @foreach ($data as $record)
                                    <div class="col-md-4 col-12 car_auction mb-2">
                                        <div class="item-wrap text-center">
                                            <div class="item loading">
                                                <div class="time-left">
                                                    <i class="far fa-clock"></i>
                                                    <span class="text">Live Auction start in <span
                                                            data-countdown="{{ $record->dateTime }}"></span>
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
                                                    <a href="{{ url('download', ['filename' => $record->filename]) }}"
                                                        class="btn btn-warning">
                                                        view more items
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
</body>

</html>
