<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id'
        // 'address',
        // 'dob',
        // 'nationality',
        // 'religion',
        // 'education',
        // 'experience',
        // 'skills',
        // 'projects',
        // 'publications',
        // 'achievements',
        // 'languages',
        // 'hobbies',
        // 'other_info',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
