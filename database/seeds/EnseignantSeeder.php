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
            'nom_ens' => "OUHARNI",
            
        ]);




    DB::table('enseignants')->insert([
            'code_ens' => "Ens3",
            'nom_ens' => "bousstia",
            
        ]);



 DB::table('enseignants')->insert([
            'code_ens' => "Ens4",
            'nom_ens' => "aida",
            
        ]);

  DB::table('enseignants')->insert([
            'code_ens' => "Ens5",
            'nom_ens' => "Boutomi",
            
        ]);



    DB::table('enseignants')->insert([
            'code_ens' => "Ens6",
            'nom_ens' => "assist1",
            
        ]);


      DB::table('enseignants')->insert([
            'code_ens' => "Ens7",
            'nom_ens' => "ferfara",
            
        ]);


        DB::table('enseignants')->insert([
            'code_ens' => "Ens8",
            'nom_ens' => "ould_aissa",
            
        ]);



        DB::table('enseignants')->insert([
            'code_ens' => "Ens9",
            'nom_ens' => "Riali",
            
        ]);


        DB::table('enseignants')->insert([
            'code_ens' => "Ens10",
            'nom_ens' => "Djeddar",
            
        ]);
        DB::table('enseignants')->insert([
            'code_ens' => "Ens11",
            'nom_ens' => "massoudi",
            
        ]);
        DB::table('enseignants')->insert([
            'code_ens' => "Ens12",
            'nom_ens' => "nassri",
            
        ]);
        DB::table('enseignants')->insert([
            'code_ens' => "Ens13",
            'nom_ens' => "nahal",
            
        ]);
        DB::table('enseignants')->insert([
            'code_ens' => "Ens14",
            'nom_ens' => "hadj_hani",
            
        ]);



        DB::table('enseignants')->insert([
            'code_ens' => "Ens15",
            'nom_ens' => "bey",
            
        ]);

        DB::table('enseignants')->insert([
            'code_ens' => "Ens16",
            'nom_ens' => "douga",
            
        ]);       


         DB::table('enseignants')->insert([
            'code_ens' => "Ens17",
            'nom_ens' => "cherfa",
            
        ]);


 

 







 
    }
}
