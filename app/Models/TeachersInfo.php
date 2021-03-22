<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachersInfo extends Model
{
    use HasFactory;

    protected $table = 'teachers_info';

    protected $fillable = [
        'intro_vid',
        'country',
        'graduated_from',
        'graduated_year',
        'description',
        'birth_date',
    ];
}
