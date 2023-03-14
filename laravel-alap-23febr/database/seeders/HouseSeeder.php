<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("houses")->insert([
            ['id' => 1,'name'=>'Gryffindor','img'=>'gryffindor.jpg'],
            ['id' =>2,'name'=>'Ravenclaw','img'=>'ravenclaw.jpg'],
            ['id' =>3,'name'=>'Slytherin','img'=>'slytherin.jpg'],
            ['id' =>4,'name'=>'Hufflepuff','img'=>'hufflepuff.jpg'],
            ['id' =>5,'name'=>'Beauxbatons Academy of Magic','img'=>'beauxbatons.jpg'],
            ['id' =>6,'name'=>'Durmstrang Institute','img'=>'durmstrang.jpg'],
        ]);
    }
}
