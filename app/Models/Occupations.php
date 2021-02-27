<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\EventRegistrants;

class Occupations extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function registrants(){
        return $this->hasMany(EventRegistrants::class, 'occupation_id');
    }
}
