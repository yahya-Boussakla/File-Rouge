<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'schedule_id', 'module_id', 'room_id', 'trainer_id',
        'lesson_date', 'start_time', 'end_time', 'day_of_week'
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
