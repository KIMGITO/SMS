<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'emergency_contact',
        'tsc_no',
        'date_of_hire',
        'department',
        'position',
        'subjects',
        // 'first_name',
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
