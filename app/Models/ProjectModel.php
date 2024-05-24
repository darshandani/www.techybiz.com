<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProjectModel extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = "projects";
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'pname',
        'description',
        'price',
        'is_discount',
        'payment_status',
        'submited_at',
        'status'
    ];
}
