<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{

    public function run()


    {
        factory(\App\Employee::class , '15')->create();

    }
}
