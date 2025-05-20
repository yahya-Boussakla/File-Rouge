<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $fillable = ['groupe_name'];
    public function shedules(){
        return $this->hasMany(Schedule::class, "groupe_id");
    }
}
