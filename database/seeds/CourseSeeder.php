<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


     DB::table('courses')->insert([
            'course_code' => "XC1",
            'course_nom' =>"algorithme" ,
            'course_max'=>25,
            'fondamental' =>"oui",
            'type' =>"cour"
            
            
        ]);



             DB::table('courses')->insert([
            'course_code' => "XC3",
            'course_nom' =>"TD_Algo" ,
            'course_max'=>30,
            'fondamental' =>"oui",
            'type' =>"td"

            
            
        ]);


        DB::table('courses')->insert([
            'course_code' => "XC2",
            'course_nom' =>"TD_AI" ,
            'course_max'=>30,
            'fondamental' =>"non",
            'type' =>"td"                        
        ]);

   
                  DB::table('courses')->insert([
            'course_code'=> "XC4",
            'course_nom' =>"IA" ,
            'course_max' =>45,
            'fondamental'=>"non",
            'type'       =>"cour"
            
            
        ]);

                  DB::table('courses')->insert([
            'course_code'=> "XC5",
            'course_nom' =>"POO" ,
            'course_max' =>45,
            'fondamental'=>"oui",
            'type'       =>"cour"
            
            
        ]);



                  DB::table('courses')->insert([
            'course_code'=> "XC6",
            'course_nom' =>"IHM" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"cour"
            
            
        ]);
                  DB::table('courses')->insert([
            'course_code'=> "XC7",
            'course_nom' =>"IHM2" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"cour"
            
            
        ]);
                  DB::table('courses')->insert([
            'course_code'=> "XC8",
            'course_nom' =>"IHM3" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"cour"
            
            
        ]);

                  DB::table('courses')->insert([
            'course_code'=> "XC9",
            'course_nom' =>"IHM4" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"cour"
            
            
        ]);


                      DB::table('courses')->insert([
            'course_code'=> "XC10",
            'course_nom' =>"IHM5" ,
            'course_max' =>30,
            'fondamental'=>"non",
            'type'       =>"cour"
            
            
        ]);








    }

}
