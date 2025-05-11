<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nis',
        'gender',
        'address',
        'contact',
        'internship_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::saved(function ($student) {
            if ($student->user && !$student->user->hasRole('Student')) {
                $student->user->assignRole('Student');
            }
        });
    }

    public function internship()
    {
        return $this->hasOne(Internship::class);
    }
}
