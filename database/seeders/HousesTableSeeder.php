<?php

namespace Database\Seeders;

use App\Models\House;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houses = array_map('str_getcsv', file(__DIR__.'/houses.csv'));
        // dd($houses);
        foreach($houses as $key => $house){
            if($key > 0){
                $newHouse = new House();
                $newHouse->image = $house[0];
                $newHouse->city = $house[4];
                $newHouse->save();
            }
        }
    }
}
