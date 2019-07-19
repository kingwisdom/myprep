<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tutor;

class Learner extends Model
{
    //
    protected $fillable = [
        'name', 'tutorname','tutor_id', 'phone','address','city','state','comment'
    ];

    public function tutor() {
        return $this->belongsTo(Tutor::class);
    }
}
