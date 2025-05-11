<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nip',
        'gender',
        'address',
        'contact',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::saved(function ($teacher) {
            if ($teacher->user && !$teacher->user->hasRole('Teacher')) {
                $teacher->user->assignRole('Teacher');
            }
        });
    }

    public function internship()
    {
        return $this->hasMany(Internship::class);
    }
}
