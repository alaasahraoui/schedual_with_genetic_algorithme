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
            'room_max' => 120,
            
        ]);
 
 
    		   		   DB::table('rooms')->insert([
            'room_code' =>  'R2',
            'room_max' => 120,
            
        ]);



    		   		   		   DB::table('rooms')->insert([
            'room_code' =>  'R3',
            'room_max' => 120,
            
        ]);


                               DB::table('rooms')->insert([
            'room_code' =>  'R4',
            'room_max' => 120,
            
        ]);
                               DB::table('rooms')->insert([
            'room_code' =>  'R5',
            'room_max' => 120,
            
        ]);




                               DB::table('rooms')->insert([
            'room_code' =>  'R6',
            'room_max' => 120,
            
        ]);



                               DB::table('rooms')->insert([
            'room_code' =>  'R7',
            'room_max' => 120,
            
        ]);



                               DB::table('rooms')->insert([
            'room_code' =>  'R8',
            'room_max' => 120,
            
        ]);

                               DB::table('rooms')->insert([
            'room_code' =>  'R9',
            'room_max' => 120,
            
        ]);

                                DB::table('rooms')->insert([
            'room_code' =>  'R10',
            'room_max' => 120,
            
        ]);

    }
}
