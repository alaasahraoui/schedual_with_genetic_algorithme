<?php

 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    		   DB::table('rooms')->insert([
            'room_code' => 'R1',
            'room_max' => 25,
            
        ]);




    		   		   DB::table('rooms')->insert([
            'room_code' =>  'R2',
            'room_max' => 45,
            
        ]);



    		   		   		   DB::table('rooms')->insert([
            'room_code' =>  'R3',
            'room_max' => 35,
            
        ]);
     
    }
}
