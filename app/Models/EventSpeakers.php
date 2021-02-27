<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\EventSpeakerActivities;

class EventSpeakers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function eventSpeakerActivities(){
        return $this->hasMany(EventSpeakerActivities::class, 'speaker_id');
    }
}
