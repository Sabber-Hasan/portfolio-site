<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'level',
        'institute',
        'board',
        'duration',
        'session',
        'subject',
        'group',
        'division',
        'grade',
        'grade_out_of',
        'passing_year',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
