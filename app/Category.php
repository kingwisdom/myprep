<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function tutor() {
        return $this->hasMany(Tutor::class);
    }
}
