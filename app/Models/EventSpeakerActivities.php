<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Events;
use App\Models\EventSpeakers;

class EventSpeakerActivities extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'speaker_id'];

    public function event(){
        return $this->belongsTo(Events::class, 'event_id');
    }

    public function speaker(){
        return $this->belongsTo(EventSpeaker::class, 'speaker_id');
    }
}
