<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{

    protected $fillable = [
        'name',
        'business_field',
        'address',
        'contact',
        'email',
    ];

    /** @use HasFactory<\Database\Factories\IndustryFactory> */
    use HasFactory;

    public function internship()
    {
        return $this->hasMany(Internship::class);
    }
}
