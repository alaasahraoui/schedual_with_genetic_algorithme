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
            'course_max'=>40,
            
            
        ]);


        DB::table('courses')->insert([
            'course_code' => "XC2",
            'course_nom' =>"cryptography" ,
            'course_max'=>30,
            
            
        ]);

           DB::table('courses')->insert([
            'course_code' => "XC3",
            'course_nom' =>"Anatomy" ,
            'course_max'=>30,
            
            
        ]);








    }

}
