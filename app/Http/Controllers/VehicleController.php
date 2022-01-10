<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Auction;
use App\Models\Autctionlisting;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Autctionlisting::all();
        return view('admin.vehicles.listing')->with(['vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $vehicle = Autctionlisting::find($id);
        $vehicle->auctionlist = Auction::all();
        return view('admin.vehicles.edit')->with(['vehicle' => $vehicle]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVehicleRequest $request, $id)
    {
        $vehicle = Autctionlisting::find($id);
        $vehicle->car_condition = $request->car_condition;
        $vehicle->car_type = $request->car_type;
        $vehicle->car_vin = $request->car_vin;
        $vehicle->car_year = $request->car_year;
        $vehicle->car_make = $request->car_make;
        $vehicle->car_model = $request->car_model;
        $vehicle->car_interior = $request->car_interior;
        $vehicle->car_exterior = $request->car_exterior;
        $vehicle->car_drive_type = $request->car_drive_type;
        $vehicle->car_transmission = $request->car_transmission;
        $vehicle->car_fuel = $request->car_fuel;
        $vehicle->car_mileage = $request->car_mileage;
        $vehicle->car_specification = $request->car_specification;
        $vehicle->car_engine = $request->car_engine;
        $vehicle->car_cylender = $request->car_cylender;
        $vehicle->car_doors = $request->car_doors;
        $vehicle->car_drive_status = $request->car_drive_status;
        $vehicle->car_primary_damage = $request->car_primary_damage;
        $vehicle->car_secondary_damage = $request->car_secondary_damage;
        $vehicle->car_keys = $request->car_keys;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->car_buy_price = $request->car_buy_price;
        $vehicle->car_bid = $request->car_bid;
        $vehicle->auction_id = $request->auctionlist_id;
        $vehicle->save();
        return back()->with(['success' => 'Vehicle Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msg = 'Vehicle could not deleted';
        $vehicle = Autctionlisting::find($id);
        if ($vehicle) {
            $vehicle->delete();
            $msg = 'Vehicle deleted successfully';
        }
        return back()->with(['success' => $msg]);
    }
}
