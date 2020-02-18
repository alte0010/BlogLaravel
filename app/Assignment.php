<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
}
