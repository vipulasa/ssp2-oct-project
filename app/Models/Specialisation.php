<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialisation extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'status',
    ];
}
