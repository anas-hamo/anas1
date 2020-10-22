<?php

use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Office::class, 15)->create();

    }
}


