
<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Order::class, 15)->create();

    }
}
