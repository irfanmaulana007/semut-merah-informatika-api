<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Events;
use App\Models\Occupations;

class EventRegistrants extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'occupation_id', 'name', 'company', 'email', 'phone'];

    public function event(){
        return $this->belongsTo(Events::class, 'event_id');
    }

    public function occupation(){
        return $this->belongsTo(Events::class, 'occupation_id');
    }
}
