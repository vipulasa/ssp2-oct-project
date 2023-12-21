<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnalyticData extends Model
{
    protected $fillable = [
        'user_id',
        'session_id',
        'analytic_type',
        'page',
    ];
}
