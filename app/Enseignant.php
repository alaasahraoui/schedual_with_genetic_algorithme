<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{


   public function courses()
    {
        return $this->hasMany(Courses::class);
    }


  protected $fillable = [
        'code_ens', 'nom_ens'
    ];

}
