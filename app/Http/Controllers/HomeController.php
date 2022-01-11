<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Autctionlisting;
use App\Models\Gallery;
use App\Models\Image;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DateTime;
use Illuminate\Support\Facades\Date;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listing = Auction::where('auction_date', '>', Carbon::today()->toDateString())
            ->orderBy('auction_date', 'asc')
            ->limit(3)
            ->get();

        foreach ($listing as $list) {
            $date = new DateTime($list->auction_date);
            $time = new DateTime($list->auction_time);

            // Solution 1, merge objects to new object:
            $merge = new DateTime($date->format('Y-m-d') . ' ' . $time->format('H:i:s'));
            // echo $merge->format('Y-m-d H:i:s');
            $list->dateTime = $merge->format('Y-m-d H:i:s');
        }
        return view('home')->with(['data' => $listing]);
    }

    public function car_auction()
    {
        $data = Auction::all();
        return view('admin.add_car_auction')->with('data', $data);
    }
    public function getAuction()
    {
        $statement = DB::select("SHOW TABLE STATUS LIKE 'auctionlisting'"); //next id to be inserted
        $nextId = $statement[0]->Auto_increment;

        return response()->json(['id' => $nextId]);
    }
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'car_condition' => 'required',
            'car_type' => 'required',
            'car_vin' => 'required',
            'car_year' => 'required',
            'car_make' => 'required',
            'car_model' => 'required',
            'car_interior' => 'required',
            'car_exterior' => 'required',
            'car_drive_type' => 'required',
            'car_transmission' => 'required',
            'car_fuel' => 'required',
            'car_mileage' => 'required',
            'car_specification' => 'required',
            'car_engine' => 'required',
            'car_cylender' => 'required',
            'car_doors' => 'required',
            'car_drive_status' => 'required',
            'car_primary_damage' => 'required',
            // 'car_secondary_damage' => 'required',
            'car_keys' => 'required',
            'vehicle_type' => 'required',
            'auctionlist_id' => 'required',
        ]);
        $request['auction_id'] = $request->auctionlist_id;
        // dd($request->all());
        $auctionlisting = Autctionlisting::create($request->all());
        $auction_id = $auctionlisting->id;
        // dd($auction_id);
        // if ($request->hasFile('front_image')) {
        //     $image = $request->file('front_image');
        //     $name = Str::random(10) . $image->getClientOriginalName();
        //     // dd($name, $image);
        //     $image->move(public_path('images'), $name);
        //     $img = new Image;
        //     $img->image = $name;
        //     $img->auctionlisting_id = auth()->user()->id;
        //     $img->save();
        //     // Image::Create([
        //     //     'image' => $name,
        //     //     'auctionlisting_id' => auth()->user()->id
        //     // ]);
        // }
        // if ($request->hasFile('gallery')) {
        //     foreach ($request->has('gallery') as $image) {
        //         $name = Str::random(10) . $image->getClientOriginalName();
        //         $image->move(public_path('images'), $name);
        //         $gallery = new Gallery;
        //         $gallery->image = $name;
        //         $gallery->auctionlisting_id = auth()->user()->id;
        //         $gallery->save();
        //     }
        // }
        return back()->with(['success' => 'Car Listed Successfully']);
    }
    public function storeAuction(Request $request)
    {
        $request->validate([
            'auction_date' => 'required',
            'auction_time' => 'required',
            'auction_location' => 'required',
            'total_vehicle' => 'required',
            'run_drive' => 'required',
            'bid_increment' => 'required',
            'with_keys' => 'required',
            'filename' => 'required|max:5000',
        ]);
        // dd($request->all());
        $auction = new Auction;
        $auction->auction_date = $request->auction_date;
        $auction->auction_time = $request->auction_time;
        $auction->auction_location = $request->auction_location;
        $auction->run_drive = $request->run_drive;
        $auction->total_vehicle = $request->total_vehicle;
        $auction->bid_increment = $request->bid_increment;
        $auction->with_keys = $request->with_keys;
        if ($request->hasFile('filename')) {
            $filename = Str::random(10) . $request->file('filename')->getClientOriginalName();
            $request->file('filename')->move(public_path('files'), $filename);
            $auction->filename = $filename;
        }
        $auction->save();
        return back()->with(['success' => 'Auction listed Successfully']);
    }
    public function addGallery(Request $request, $id)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);

        $imageUpload = new Gallery();
        $imageUpload->image = $imageName;
        $imageUpload->auctionlisting_id = $id;
        $imageUpload->save();
        return response()->json(['success' => $imageName]);
    }
    public function front_image(Request $request, $id)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);

        $imageUpload = new Image();
        $imageUpload->image = $imageName;
        $imageUpload->auctionlisting_id = $id;
        $imageUpload->save();
        return response()->json(['success' => $imageName]);
    }
    public function downloadPdf(Request $request, $filename)
    {
        // dd(public_path());
        $file = public_path('/files/' . $filename);
        $header = array(
            'Content-Type' => 'application/pdf'
        );
        return response()->download($file);
    }
    //qazi
	
    public function welcome(){

	$data = DB::table('auctionlisting')
                    ->select('*'
                     ,DB::raw('(select image from images where auctionlisting_id=auctionlisting.id LIMIT 1) as coverImage')
		     )->limit(5)->get();

	return view('welcome')->with('data', $data);

    }
    public function all_listings(Request $request){

        $data_required = $request->data_required ?? 50;

        $make = $request->make;
        $model = $request->model;
        $min_price = $request->min_price;
        $max_price = $request->max_price;
        $vin = $request->vin;
        $vehicle_type = $request->vehicle_type;
        $auctionId = $request->auction;

        $data = DB::table('auctionlisting')
                    ->select('*'
                        ,DB::raw('(select image from images where auctionlisting_id=auctionlisting.id LIMIT 1) as coverImage')
                        ,DB::raw('(select count(id) from gallery where auctionlisting_id=auctionlisting.id) as imagesCount')
                        ,DB::raw('(select count(id) from auctionlisting where vehicle_type = 1) as auctionCarsCount'));

        $auctionCarsCount = DB::table('auctionlisting')->where('vehicle_type', 1);//->count();
        $buyNowCarsCount = DB::table('auctionlisting')->where('vehicle_type', 2);//->count();

        $data = $data->limit($data_required);

        if($make){
            $data = $data->where('car_make','=',$make);
            $auctionCarsCount = $auctionCarsCount->where('car_make','=',$make);
            $buyNowCarsCount = $buyNowCarsCount->where('car_make','=',$make);
        }
        if($model){
            $data = $data->where('car_model','=',$model);
            $auctionCarsCount = $auctionCarsCount->where('car_model','=',$model);
            $buyNowCarsCount = $buyNowCarsCount->where('car_model','=',$model);

        }
        if($min_price){
            $data = $data->where('car_bid','>=',$min_price);
            $auctionCarsCount = $auctionCarsCount->where('car_bid','=',$min_price);
            $buyNowCarsCount = $buyNowCarsCount->where('car_bid','=',$min_price);

        }
        if($max_price){
            $data = $data->where('car_bid','<=',$max_price);
            $auctionCarsCount = $auctionCarsCount->where('car_bid','=',$max_price);
            $buyNowCarsCount = $buyNowCarsCount->where('car_bid','=',$max_price);

        }
        if($vin){
            $data = $data->where('car_vin','=',$vin);
            $auctionCarsCount = $auctionCarsCount->where('car_vin','=',$vin);
            $buyNowCarsCount = $buyNowCarsCount->where('car_vin','=',$vin);

        }
        if($vehicle_type == 1 || $vehicle_type == 2){
            $data = $data->where('vehicle_type','=',$vehicle_type);
            $auctionCarsCount = $auctionCarsCount->where('vehicle_type','=',$vehicle_type);
            $buyNowCarsCount = $buyNowCarsCount->where('vehicle_type','=',$vehicle_type);
        }
        if($auctionId){
            $data = $data->where('auction_id','=',$auctionId);
            $auctionCarsCount = $auctionCarsCount->where('auction_id','=',$auctionId);
            $buyNowCarsCount = $buyNowCarsCount->where('auction_id','=',$auctionId);
        }
        $data = $data->get();
        $auctionCarsCount = $auctionCarsCount->count();
        $buyNowCarsCount = $buyNowCarsCount->count();
        $allRecords = [
            'data'  => $data,
            'auctionCarsCount'   => $auctionCarsCount,
            'buyNowCarsCount' => $buyNowCarsCount
        ];
        //return json_encode($allRecords);
        return view('listings.listings')->with('allRecords', $allRecords);
    }


    public function listing($id){
        $data = Autctionlisting::find($id);

        $data['images'] = DB::table('gallery')
                        ->select('image')
                        ->where('auctionlisting_id','=',$id)
                        ->get();

        return view('listings.listing')->with('data', $data);
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');

    }

    public function faq(){
        return view('faq');

    }

    public function login_register(){
        return view('login_register');
    }
}
