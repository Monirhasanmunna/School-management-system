<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignTeacher extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
    public function ins_class()
    {
        return $this->belongsTo(InsClass::class,'class_id');
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
