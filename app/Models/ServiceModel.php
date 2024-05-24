<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ServiceModel extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = 'services';
    protected $fillable = [
        'name', 'email', 'message'
    ];
}
