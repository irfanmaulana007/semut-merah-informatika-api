<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Events;
use App\Models\FeeTypes;

class EventFees extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'fee_type_id', 'amount', 'end_date'];

    public function event(){
        return $this->belongsTo(Events::class, 'event_id');
    }
    
    public function feeType(){
        return $this->belongsTo(FeeTypes::class, 'fee_type_id');
    }
}
