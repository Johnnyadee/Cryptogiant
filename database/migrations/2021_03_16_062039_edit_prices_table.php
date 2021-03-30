<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prices', function (Blueprint $table) {
            $table->string('btcngn')->nullable();
            $table->string('btcusd')->nullable();
            $table->string('ltcngn')->nullable();
            $table->string('ltcusd')->nullable();
            $table->string('dgcngn')->nullable();
            $table->string('dgcusd')->nullable();
            $table->string('yes')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
