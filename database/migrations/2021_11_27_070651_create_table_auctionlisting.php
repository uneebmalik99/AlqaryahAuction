<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAuctionlisting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctionlisting', function (Blueprint $table) {
            $table->id();
            $table->string('car_condition');
            $table->string('car_type');
            $table->string('car_vin');
            $table->string('car_year');
            $table->string('car_make');
            $table->string('car_model');
            $table->string('car_interior');
            $table->string('car_exterior');
            $table->string('car_drive_type');
            $table->string('car_transmission');
            $table->string('car_fuel');
            $table->string('car_mileage');
            $table->string('car_specification');
            $table->string('car_engine');
            $table->string('car_cylender');
            $table->string('car_doors');
            $table->string('car_drive_status');
            $table->string('car_primary_damage');
            $table->string('car_secondary_damage');
            $table->string('car_keys');
            $table->string('vehicle_type');
            $table->string('car_buy_price');
            $table->string('car_vehicle');
            $table->string('car_auction_Date');
            $table->string('car_bid');
            $table->string('car_auction_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_auctionlisting');
    }
}
