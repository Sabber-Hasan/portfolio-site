<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'heading',
        'file',
        'jump_button'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
