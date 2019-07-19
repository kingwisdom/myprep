<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tutor;

class Isactive extends Model
{
    //
    protected $fillable = [
        'tutor_id'
    ];
    public function tutor() {
        return $this->belongsTo(Tutor::class);
    }
}
