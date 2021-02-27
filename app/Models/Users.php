<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;
    
    protected $fillable = ['id', 'name', 'email', 'password'];

     //Get the identifier that will be stored in the subject claim of the JWT.
     public function getJWTIdentifier()
     {
         return $this->getKey();
     }
     // Return a key value array, containing any custom claims to be added to the JWT.
     public function getJWTCustomClaims()
     {
         return [];
     }
}
