<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Learner;
use App\Isactive;

class Tutor extends Model
{
    protected $fillable = [
        'surname', 'firstname','category_id', 'email','password','courses', 'phone','city','state','image'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function is_active() {
        return $this->belongsTo(Isactive::class);
    }

    public function learner() {
        return $this->hasMany(Learner::class);
    }
}
