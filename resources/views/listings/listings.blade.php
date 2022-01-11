@extends('layouts.main')

@section('inline_style')
<style>

    nav{
        background: black;
    }
    .listings-detail{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .change-layout {
        font-size: 25px;
        color: var(--primary);
    }
    .change-layout i{
        cursor:pointer
    }
    .flex-container-center{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .sorting{
        width: 80%;
    }

    /* listing */
    .listing-item__container {
        background-color: #fff!important;
        box-shadow: 1px 1px 0 0 rgb(196 196 196 / 24%);
        border: solid 1px #e7edf3;
        transition: all .2s ease;
        border-radius: 15px;
        overflow: hidden;
    }
    .listing-item__container:hover {
       border: 1px solid var(--primary);
       cursor: pointer;
    }
    .listing-item__container:hover .listing-item__image img {
       transform: scale(1.1);
    }

    .listing-item__content {
        padding: 15px;
    }
    .listing-item__image {
        width: 100%;
        height: 180px;
        display: flex;
        align-items: center;
        overflow: hidden;
        position: relative
    }

    .listing-item__image img{
        width: 100%;
        transition: all .2s ease;
    }

    .content__price h4 {margin: 0;padding: 8px 0;border-bottom: 1px solid #ddd;}

    span.other-detail__year {
        background: var(--primary);
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    span.other-detail__transmission {
        color: #a3a3a3;
    }

    span.other-detail__type {
        color: #a3a3a3;
    }

    .content__other__details {
        padding: 22px 0 10px 0;
    }

    .content__other__details > span {
        /* margin: 0 12px 0 0; */
    }
    .list {
        margin-bottom: 35px;
    }
    

    /* list view V2 */
    .view-2 {
        display: flex;
        align-items: center;
        padding: 0 25px;
        position: relative;
    }

    .view-2 .listing-item__image {
        border: 1px solid #ddd;
        border-radius: 16px;
        height:130px;
        width:20%
    }

    .view-2 .listing-item__content {
        padding-left: 40px;
    }

    .view-2 .content__name {
        font-size: 26px;
    }

    .view-2 .content__features {
        color: #b3b3b3;
    }

    .view-2 .content__price {
        position: absolute;
        right: 20px;
        bottom: 22px;
    }

    .view-2 .content__price h4 {
        color: var(--primary) !important;
        font-size: 30px;
        border: none;
        font-weight: bold;
    }
    .view-2 .content__price span {
        font-size: 20px;
    }

    .view-2 .content__location {
        padding: 10px 0;
    }

    .view-2 .content__location span {
        color: var(--primary);
    }

    /* end */

/* custom section */
.select2-container .select2-selection--single{
    width: 100%;
    height: auto;
    border: 1px solid #e7edf3;
    box-shadow: 1px 1px 0 0 rgb(196 196 196 / 24%);
    padding: 0 0 0 27px;
    background: #fff;
    border-radius: 10px;
    position: relative;
    padding: 13px 25px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow{
    height: 50px;
}
.select2-dropdown {
    display: block;
    z-index: 1051;
    border: 1px solid #e7edf3;
    box-shadow: 1px 1px 0 0 rgb(196 196 196 / 24%);
    background: #fff;
    border-radius: 10px;
    position: relative;
    padding: 1px 5px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow{
    height: 50px;
}
.select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
    color: var(--primary);
    background: transparent;
}
.select2-container--default .select2-results__option--selected {
    color: var(--primary);
    font-weight: bold;
    background: transparent;
}
.select2-container--default .select2-search--dropdown .select2-search__field {
    border: 1px solid #ddd;
}

.select2-results__options::-webkit-scrollbar {
    width: 2px;
}

.select2-results__options::-webkit-scrollbar-track {
    background-color:whitehtgrey
}

.select2-results__options::-webkit-scrollbar-thumb {
    background-color: #dddddd;
    outline: 1px solid #c9c9c9;
}
.select2-container{
    /* width: 100% !important */
}
/* end */

/* input primary */
.listing-search-container{
    background: #f2f5fb;
    padding: 30px 20px 20px 20px;
}
.page-container, .listing-search {
    max-width: 1300px
}
.input-primary {
    width: 100%;
    height: auto;
    border: 1px solid #e7edf3;
    box-shadow: 1px 1px 0 0 rgb(196 196 196 / 24%);
    padding: 0 0 0 27px;
    background: #fff;
    border-radius: 10px;
    position: relative;
    padding: 15px 25px;
}
.car-type {
    margin: 0 13px;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
    color: black
}
.car-type span {
   color: #c5c5c5;
   font-weight: 400;
}
.car-type.active {
   color: var(--primary);
}
.primary-circle {
    color: var(--primary);
    font-size: 8px;
    vertical-align: middle;
    margin: 0 5px;
}

/* end */



@media screen and (max-width: 1010px){
    .change-layout{
        display:none
    }

}

@media screen and (max-width: 750px){
    .listings-detail{
        flex-direction: column;
        align-items: flex-start;
    }
    .listings-detail__sort{
        width: 100% !important;
        flex-direction: column;
        align-items: flex-start;
    }
    .listings-detail__sort .sorting{
        width: 100%;
    }

}

@media screen and (max-width: 550px){
    .listing-item__image{
        height: 210px;
    }
}


</style>
@endsection

@section('content')
<div class="row listing-search-container justify-content-center m-0">

        <div class="listing-search">
            <form action="/all_listings" method="get">
                <div class="row pb-3">
                    @if(request()->get('auction') )
                        <input type="hidden" value="{{ request()->get('auction') }}" name="auction">
                    @endif
                    <div class="col-lg-2 mb3">
                        <input type="text" name="make" class="form-control input-primary" value="{{ request()->get('make') }}" placeholder="Make">

                    </div>

                    <div class="col-lg-2 mb3">
                        <input type="text" name="model" class="form-control input-primary" value="{{ request()->get('model') }}" placeholder="Model">
                    </div>

                    <div class="col-lg-2 mb3">
                        <input type="text" name="min_price" class="form-control input-primary" value="{{ request()->get('min_price') }}" placeholder="Min Price">
                    </div>

                    <div class="col-lg-2 mb3">
                        <input type="text" name="max_price" class="form-control input-primary" value="{{ request()->get('max_price') }}" placeholder="Max Price">
                    </div>

                    <div class="col-lg-2 mb3">
                        <input type="text" name="vin" class="form-control input-primary" value="{{ request()->get('vin') }}" placeholder="VIN Number">
                    </div>
                    <div class="col-lg-2" style="display: flex;">
                        <button type="submit" class="btn btn-primary w-100 border-0" style="background:var(--primary); border-radius: 10px"><i class="fa fa-search"></i> Search</button>
                    </div>
                </div>
                <hr>
                <!-- <div class="row py-4" style="justify-content: right; border-top: 1px solid #ebebeb; border-bottom: 1px solid #ebebeb">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-primary w-100 border-0" style="background:var(--primary)"><i class="fa fa-search"></i> Search</button>
                    </div>
                </div> -->
                <div class="row py-4 align-items-center">
                    <div class="car-types col-lg-10 col-md-12 my-3">
                        <a class="car-type {{ request()->get('vehicle_type') == '' ? 'active' : '' }}" data-car-type="0">All <span>({{$allRecords['auctionCarsCount'] + $allRecords['buyNowCarsCount'] }})</span></a>
                        <a class="car-type {{ request()->get('vehicle_type') == '1' ? 'active' : '' }}" data-car-type="1">Auction Cars <span>({{$allRecords['auctionCarsCount']}})</span></a>
                        <a class="car-type {{ request()->get('vehicle_type') == '2' ? 'active' : '' }}" data-car-type="2">Buy Now Cars <span>({{$allRecords['buyNowCarsCount']}})</span></a>
                    </div>
                    <div class="paginate col-lg-2 col-md-12">
                        <select class="select2" style="width: 100%;">
                            <option value="50" {{request()->get('data_required') == '50' ? 'selected' : ''}}>50</option>
                            <option value="100" {{request()->get('data_required') == '100' ? 'selected' : ''}}>100</option>
                            <option value="150" {{request()->get('data_required') == '150' ? 'selected' : ''}}>150</option>
                        </select>
                    </div>


                </div>
            </form>
        </div>
    </div>
<div class="page-container container-fluid px-5 py-5">
    
    
    <div class="listings-detail pt-4 pb-5">
        <div class="listings-detail__count">
            <h2 style="font-weight: bold;">{{count($allRecords['data'])}} results </h2>   
        </div>
        <div class="listings-detail__sort flex-container-center" style="">
            <div class="change-layout" >
                <i class="fas fa-th" id="grid-layout"></i> &nbsp;           
                <i class="fas fa-bars" id="landscape-layout"></i>
            </div>
            <div class="sorting" style="display: none">
                <label for="" class="m-0 mr-3">Sort By:</label>
                <select class="select2" style="width: 76%;">
                    <option value="">Descending</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach($allRecords['data'] as $record)
            <div data-vehivle-id="{{$record->id}}" class="list col-lg-12 col-md-6 col-sm-12">
                <div class="listing-item__container view-2">
                    <div class="listing-item__image">
                        <img src="{{asset('images').'/'.$record->coverImage}}" alt="">
                        <span style="position: absolute;color: white;right: 10px;bottom: 10px;"> 
                            <i class="far fa-images"></i> {{ $record->imagesCount}}
                        </span>
                    </div>
                    <div class="listing-item__content">
                        <div class="content__name">
                            {{$record->car_year.' '.$record->car_make.' '.$record->car_model}}
                        </div>
                        <div class="content__features view-2-item">
                            Bluetooth, Radio, Heating Seats, Automatic Braking
                        </div>
                        <div class="content__price">
                            <h5 class="view-2-item" style="text-align: right; margin: 0">Starting Bid</h5>
                            <h4><span>AED</span> {{$record->car_bid}}</h4>
                        </div>
                        
                        <div class="content__other__details">
                            <span class="other-detail__year mr-2 view-2-item">{{$record->car_exterior}}</span>
                            <span class="other-detail__transmission">{{$record->car_transmission}} <i class="fas fa-circle primary-circle"></i></span>
                            <span class="other-detail__type">{{$record->car_mileage}} <i class="fas fa-circle primary-circle"></i></span>
                            <span class="other-detail__type">{{$record->car_fuel}} </span>

                        </div>
                        <div class="content__location view-2-item">
                            <span>Location: Industrial Area 2, Sharjah UAE</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        $('.select2').select2();
        changeLayout();
        $(window).on('resize', changeLayout);

        $('.list').click(function(){
            window.location.href = '/listing/'+$(this).attr('data-vehivle-id');
        });

        $('#grid-layout, #landscape-layout').click(function(){
            var view = "landscape";
            if($(this).attr('id') == "grid-layout")
                view = "grid"
            changeLayout(view);
        });

        $('.paginate select').on('select2:select', function(){ 
            var val = $(this).val();
            window.location.href = '/all_listings/dr?data_required='+val;
        });
        $('[data-car-type]').click(function(){
            var type = $(this).attr('data-car-type');
            var form = $('.listing-search form');
            if(type != 0)
                form.append('<input type="hidden" value="'+type+'" name="vehicle_type"/>');
            form[0].submit();
        });
    });

    function changeLayout(view){
        if($(window).width() < 1024 || view == "grid"){
            if(!$('.list').hasClass('col-lg-3'))
                $('.list').addClass('col-lg-3').removeClass('col-lg-12')
            if($('.list .listing-item__container').hasClass('view-2'))
                $('.list .listing-item__container').removeClass('view-2');
            $('.view-2-item').hide();
        }
        else{
            if(!$('.list').hasClass('col-lg-12'))
                $('.list').addClass('col-lg-12').removeClass('col-lg-3')
            if(!$('.list .listing-item__container').hasClass('view-2'))
                $('.list .listing-item__container').addClass('view-2');
            $('.view-2-item').show();
        }
    }
</script>
@endsection