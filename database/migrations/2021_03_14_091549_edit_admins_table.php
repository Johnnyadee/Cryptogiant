<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->text('bitcoin_address')->nullable();
            $table->text('litecoin_address')->nullable();
            $table->text('dogecoin_address')->nullable();
            $table->text('ethereum_address')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('bitcoin_address', 'litecoin_address', 'dogecoin_address', 'ethereum_address');
        });
    }
}
