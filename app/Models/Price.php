<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'technology',
        'features',
        'pages',
        'description',
        'image',
        'code',
        'link',
        'days',
        'service',
        'type',
        'price',
        'status'
    ];


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
