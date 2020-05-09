<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
 	
    public function generationscheduals()
    {
        return $this->hasMany(GenerationSchedual::class);
    }
}
