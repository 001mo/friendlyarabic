<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachersIntroVids extends Model
{
    use HasFactory;

    protected $table = 'teachers_intro_videos';

    protected $fillable = [
        'video'
    ];
}
