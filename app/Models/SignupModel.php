<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class SignupModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "signup";
    protected $fillable = [
        'username',
        'email',
        'phone',
        'password'
    ];
}
