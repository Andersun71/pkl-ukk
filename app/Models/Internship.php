<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{

    protected $fillable = [
        'student_id',
        'industry_id',
        'teacher_id',
        'start',
        'end',
    ];

    /** @use HasFactory<\Database\Factories\InternshipFactory> */
    use HasFactory;

    protected static function booted(): void
    {
        static::deleting(function (Internship $internship) {
            if ($internship->student) {
                $internship->student->update(['internship_status' => 0]);
            }
        });
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
