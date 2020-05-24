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
            'course_code' => "XC2",
            'course_nom' =>"cryptography" ,
            'course_max'=>30,
            'fondamental' =>"non",
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
            'course_code' => "XC4",
            'course_nom' =>"IA" ,
            'course_max'=>45,
            'fondamental' =>"non",
            'type' =>"cour"
            
            
        ]);








    }

}
