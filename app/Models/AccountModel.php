<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AccountModel extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = "account_settings";
    protected $fillable = [
        'image',
        'firstName',
        'lastName',
        'role',
        'phone',
        'address',
        'zipcode',
        'city'
    ];
}
