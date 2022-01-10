<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Autctionlisting;
use App\Models\Gallery;
use App\Models\Image;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\FuncCall;
use Newsletter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function dashboard()
    {
        return view('admin.dashboard');
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
        $data = Autctionlisting::latest()->first();
        $id = $data->id + 1;
        return response()->json(['id' => $id]);
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
            'car_secondary_damage' => 'required',
            'car_keys' => 'required',
            'vehicle_type' => 'required',
            'auctionlist_id' => 'required',
        ]);
        $request['auction_id'] = $request->auctionlist_id;
        // dd($request->all());
        $auctionlisting = Autctionlisting::create($request->all());
        // dd($request->hasFile('video'));
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $name = Str::random(10) . $video->getClientOriginalName();
            // dd($name, $image);
            $video->move(public_path('videos'), $name);
            $auctionlisting->video = $name;
            $auctionlisting->save();
        }
        // $auction_id = $auctionlisting->id;
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

    public function deleteGalleryFile($file)
    {
        $gallery = Gallery::where('image', $file)->first();
        $gallery->delete();
        return response()->json('image deleted');
    }

    public function deleteImageFile($file)
    {
        $image = Image::where('image', $file)->first();
        $image->delete();
        return response()->json('image deleted');
    }
}
