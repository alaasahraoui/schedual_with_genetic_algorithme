<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
        public function enseignant()
    {
        return $this->belongsTo(Enseignant::class);
    }


 protected $fillable = [
        'course_nom', 'course_code','course_max','course_enseignant'
    ];

}
