<?php

use Illuminate\Database\Seeder;
use App\Customer;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Customer::class, 5)->create();
    }
}
