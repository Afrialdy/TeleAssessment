<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard() {
        $userCount = User::count();

        $kepribadianData = User::select('kepribadian', DB::raw('count(*) as total'))
                               ->groupBy('kepribadian')
                               ->get();

        // Prepare data for the pie chart
        $labels = $kepribadianData->pluck('kepribadian');
        $data = $kepribadianData->pluck('total');

        return view('dashboard', compact('userCount', 'labels', 'data'));
    }
}
