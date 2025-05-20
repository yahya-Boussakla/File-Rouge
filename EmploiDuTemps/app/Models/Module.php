<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['module_name', 'module_code'];

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'module_id', 'module_id');
    }
}
