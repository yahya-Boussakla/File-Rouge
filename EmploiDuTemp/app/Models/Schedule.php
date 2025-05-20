<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['groupe_id', 'start_date', 'end_date', 'description'];

    public function groupe() {
        return $this->belongsTo(Groupe::class, 'groupe_id');
    }

    public function lesson(){
        return $this->hasMany(Lesson::class, "lesson_id");
    }
}
