<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnFromListing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auctionlisting', function (Blueprint $table) {
            $table->dropColumn('car_auction_date');
            $table->dropColumn('car_auction_number');
            $table->integer('auction_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listing', function (Blueprint $table) {
            //
        });
    }
}
