<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($travels as $travel){
            $newTravel = new Travel();
            $newTravel->city = $travel['city'];
            $newTravel->location = $travel['location'];
            $newTravel->duration = $travel['duration'];
            $newTravel->price = $travel['price'];
            $newTravel->save();
        }
    }
}
