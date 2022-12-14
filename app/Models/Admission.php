<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function section(){

     return $this->belongsTo(Section::class);
    }
     public function group(){

     return $this->belongsTo(Group::class);
    }
     public function category(){

     return $this->belongsTo(Category::class);
    }
}
