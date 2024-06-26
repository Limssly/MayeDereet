<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donneur extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'blood_group',
        'date_of_birth',
        'email',
        'smooking',
        'allergies',
        'weight',
        'maladies',
        'traitement',
        'alcool'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    public $timestamps = false;
}
