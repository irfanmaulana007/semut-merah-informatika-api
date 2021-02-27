<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PaymentStatus;
use App\Models\EventRegistrants;

class EventPayments extends Model
{
    use HasFactory;

    protected $fillable = ['payment_status_id', 'registrant_code', 'amount', 'note', 'payment_date'];

    public function paymentStatus(){
        return $this->belongsTo(Events::class, 'payment_status_id');
    }

    public function eventRegistrant(){
        return $this->belongsTo(Events::class, 'registrant_code');
    }
}
