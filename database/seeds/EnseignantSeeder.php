<?php

use Illuminate\Database\Seeder;

class EnseignantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('enseignants')->insert([
            'code_ens' => "Ens1",
            'nom_ens' => "Mr Cherif Zahar",
            
        ]);



  DB::table('enseignants')->insert([
            'code_ens' => "Ens2",
            'nom_ens' => "Mr Nahal",
            
        ]);




    DB::table('enseignants')->insert([
            'code_ens' => "Ens3",
            'nom_ens' => "Mme Arroussi",
            
        ]);



 DB::table('enseignants')->insert([
            'code_ens' => "Ens4",
            'nom_ens' => "Miss Bacha",
            
        ]);
    }
}
