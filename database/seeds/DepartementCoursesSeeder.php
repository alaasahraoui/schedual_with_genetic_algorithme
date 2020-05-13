<?php

use Illuminate\Database\Seeder;

class DepartementCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                           DB::table('departement_courses')->insert([
            'dep_nom' => "ST",
            
             'course_code' => "XC1",
            
        ]);


                    DB::table('departement_courses')->insert([
            'dep_nom' => "INFO",
            
             'course_code' => "XC2",
            
        ]);

                                 DB::table('departement_courses')->insert([
            'dep_nom' => "Bio",
            
             'course_code' => "XC3",
            
        ]);



    }
}
