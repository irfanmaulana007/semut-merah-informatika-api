<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\EventFees;

class FeeTypes extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function fees(){
        return $this->hasMany(EventFees::class, 'fee_type_id');
    }
}
