<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{


    public function up()


    {
        Schema::create('orders', function (Blueprint $table) {

            $table->id();
            $table->dateTime('OrderDate');
            $table->dateTime('RequiredDate');
            $table->dateTime('ShippedDate');
            $table->integer('Status');
            $table->string('Comments', 255);
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
