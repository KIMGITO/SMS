<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'adm_no',
        'class',
        'address',
        'dob',
        'gender',
        'user_id',
        'gurdian_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($student) {
            $lastStudent = self::orderBy('id', 'desc')->first();
            if ($lastStudent) {
                $student->adm_no = str_pad($lastStudent->adm_no + 1, 3, '0', STR_PAD_LEFT);
            } else {
                $student->adm_no = '001';
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gurdian(){
        return $this->belongsToMany(Gurdian::class, 'gurdian_student')->withPivot('relationship')->withTimestamps();
    }
}
