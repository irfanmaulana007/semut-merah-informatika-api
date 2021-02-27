<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\EventSpeakerActivities;
use App\Models\EventContactPersons;
use App\Models\EventFacilities;
use App\Models\EventRegistrants;
use App\Models\EventFees;

class Events extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'precondition', 'capacity', 'img_url'];

    public function eventSpeakerActivities(){
        return $this->hasMany(EventSpeakerActivities::class, 'speaker_id');
    }

    public function contactPersons(){
        return $this->hasMany(EventContactPersons::class, 'event_id');
    }

    public function facilities(){
        return $this->hasMany(EventFacilities::class, 'event_id');
    }

    public function registrants(){
        return $this->hasMany(EventRegistrants::class, 'event_id');
    }

    public function fees(){
        return $this->hasMany(EventFees::class, 'event_id');
    }
}
