<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BlogModel extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = "blogs";
    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
