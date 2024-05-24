<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FaqModel extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table = "faqs";
    protected $fillable = [
        'title', 'description'
    ];
}
