<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAuctionRequest;
use App\Models\Auction;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auctions = Auction::all();
        foreach ($auctions as $auction) {
            $auction->auction_date = Carbon::parse($auction->auction_date)->diffForHumans();
            $auction->auction_time = Carbon::parse($auction->auction_time)->diffForHumans();
            // $date = new DateTime($list->auction_date);
            // $time = new DateTime($list->auction_time);

            // // Solution 1, merge objects to new object:
            // $merge = new DateTime($date->format('Y-m-d') . ' ' . $time->format('H:i:s'));
            // // echo $merge->format('Y-m-d H:i:s');
            // $list->dateTime = $merge->format('Y-m-d H:i:s');
        }
        return view('admin.auction.listing')->with(['auctions' => $auctions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_auction');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auction = Auction::find($id);
        return view('admin.auction.edit')->with(['auction' => $auction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuctionRequest $request, $id)
    {
        $auction = Auction::find($id);
        $auction->auction_date = $request->auction_date;
        $auction->auction_time = $request->auction_time;
        $auction->auction_location = $request->auction_location;
        $auction->total_vehicle = $request->total_vehicle;
        $auction->run_drive = $request->run_drive;
        $auction->bid_increment = $request->bid_increment;
        $auction->with_keys = $request->with_keys;
        $auction->save();
        return back()->with(['success' => 'Auction Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msg = "Auction Could not found";
        $auction = Auction::find($id);
        if ($auction) {
            $auction->delete();
            $msg = "Auction successfully deleted";
        }
        return back()->with(['success' => $msg]);
    }
}
