<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersPics extends Model
{
    use HasFactory;

    protected $table = 'users_pictures';

    protected $fillable = [
        'picture'
    ];
}
