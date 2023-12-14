<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hospital extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'summary',
        'address',
        'phone',
        'email',
        'status',
    ];

    protected $casts = [
        'uuid' => 'string',
        'status' => 'integer'
    ];
}
