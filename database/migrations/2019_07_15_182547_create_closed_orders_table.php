<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClosedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('closed_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('action');
            $table->string('symbol');
            $table->integer('lots');
            $table->integer('entry-price-signal');
            $table->integer('entry-price-MT4');
            $table->integer('exit-price-signal');
            $table->integer('exit-price-MT4');
            $table->integer('rest');
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
        Schema::dropIfExists('closed_orders');
    }
}
