<?php

namespace App\Http\Controllers;

use App\Models\AnalyticData;

class AnalyticsController extends Controller
{
    public function index()
    {
        return view('analytics.index', [
            'analytics' => (new AnalyticData())
                ->orderBy('created_at', 'desc')
                ->paginate(10)
        ]);
    }
}
