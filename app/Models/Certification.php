<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'issuing_organization',
        'issue_date',
        'expiration_date',
        'description',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
