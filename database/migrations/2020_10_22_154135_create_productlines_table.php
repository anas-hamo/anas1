<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductlinesTable extends Migration
{

    public function up()

    {

        Schema::create('productlines', function (Blueprint $table) {


            $table->id();
            $table->string('DesclnText' , '255');
            $table->string('DesclnHtml' , '255');
            $table->string('Image' , '100');
            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('productlines');
    }
}
