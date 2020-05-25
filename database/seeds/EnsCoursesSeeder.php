<?php

use Illuminate\Database\Seeder;

class EnsCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
  DB::table('course_enseignants')->insert([
            'course_code' => "XC1",
            'ens_code' => "Ens1",
            
        ]);


  DB::table('course_enseignants')->insert([
            'course_code' => "XC2",
            'ens_code' => "Ens2",
            
        ]);

    DB::table('course_enseignants')->insert([
            'course_code' => "XC3",
            'ens_code' => "Ens3",
            
        ]);
     DB::table('course_enseignants')->insert([
            'course_code' => "XC4",
            'ens_code' => "Ens4",
            
        ]);


     DB::table('course_enseignants')->insert([
            'course_code' => "XC5",
            'ens_code' => "Ens5",
            
        ]);


     DB::table('course_enseignants')->insert([
            'course_code' => "XC6",
            'ens_code' => "Ens5",
            
        ]);




    }
}
