<?php

use Carbon\Carbon;
use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=10; $i++) {
            Service::create([
                'user_id' => 1,
                'name' => 'name' . $i,
                'price' => 1000 + $i,
                'plan' => '月額',
                'billing_date' => Carbon::now(),
                'info_date' => Carbon::now(),
            ]);
        }
    }
}
