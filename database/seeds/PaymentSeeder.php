<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{

    public function run()
    {

        factory(\App\Payment::class, 15)->create();

    }
}
