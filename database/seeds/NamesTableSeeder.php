<?php

use Illuminate\Database\Seeder;
use App\Name;

class NamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('names')->insert([
            [
                'name' => 'Spotify(Standard)',
                'price' => 980,
            ],
            [
                'name' => 'Spotify(Duo)',
                'price' => 1280,
            ],
            [
                'name' => 'Spotify(Family)',
                'price' => 1480,
            ],
            [
                'name' => 'Spotify(Student)',
                'price' => 480,
            ],
        ]);
    }
}
