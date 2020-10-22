<?php

use Illuminate\Database\Seeder;

class ProductlineSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Productline::class, 15)->create();
    }
}
