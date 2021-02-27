<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Events;

class EventDatetimes extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'date', 'start_time', 'end_time'];

    public function event(){
        return $this->belongsTo(Events::class, 'event_id');
    }
}
