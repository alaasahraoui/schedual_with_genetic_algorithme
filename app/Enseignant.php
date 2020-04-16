<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    DB::table('enseignants')->insert([
            'ens_code' => 'Ens1',
            'ens_nom' => 'Mr Cherif Zahar',
            
        ]);



  DB::table('enseignants')->insert([
            'ens_code' => 'Ens2',
            'ens_nom' => 'Mr Nahal',
            
        ]);




    DB::table('enseignants')->insert([
            'ens_code' => 'Ens3',
            'ens_nom' => 'Mme Arroussi',
            
        ]);



 DB::table('enseignants')->insert([
            'ens_code' => 'Ens4',
            'ens_nom' => 'Miss Bacha',
            
        ]);

}
