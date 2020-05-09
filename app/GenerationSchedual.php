<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenerationSchedual extends Model
{
    public function generations()
    {
        return $this->belongsTo(Generation::class);
    }
}
