<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction', function (Blueprint $table) {
            $table->id();
            $table->date('auction_date');
            $table->time('auction_time');
            $table->string('auction_day');
            $table->string('auction_location');
            $table->string('total_vehicle');
            $table->string('run_drive');
            $table->string('bid_increment');
            $table->string('with_keys');
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
        Schema::dropIfExists('auction');
    }
}
