<?php

use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name'              =>  'Easy',
            'description'       =>  ''
        ]);
        Level::create([
            'name'              =>  'Normal',
            'description'       =>  ''
        ]);
        Level::create([
            'name'              =>  'Hard',
            'description'       =>  ''
        ]);
        
    }
}
