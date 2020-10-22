<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{

    public function up()

    {
        Schema::create('employees', function (Blueprint $table) {

            $table->id();
            $table->integer('OfficeCode');
            $table->integer('reportsTo');
            $table->string('LastName', 255);
            $table->string('FirstName', 255);
            $table->string('Extension', 255);
            $table->string('Email')->unique();
            $table->string('JobTitle', 100);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
