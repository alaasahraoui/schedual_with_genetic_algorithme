<?php

use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('departements')->insert([
             
            'dep_nom' => "INFO",
            
            
        ]);

            DB::table('departements')->insert([
           
            'dep_nom' => "Bio",
           
            
        ]);
            DB::table('departements')->insert([
            
            'dep_nom' => "ST",
           
            
        ]);

    }
}
