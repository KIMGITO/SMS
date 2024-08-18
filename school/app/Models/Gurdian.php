<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gurdian extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'id_no'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function student(){
        return $this->belongsToMany(Student::class,'gurdian_student')->withPivot('relationship')->withTimestamps();
    }
}
