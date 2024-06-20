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

        $monthlyUsers = User::select(DB::raw('MONTH(created_at) as month'), DB::raw('count(*) as count'))
                            ->groupBy('month')
                            ->get()
                            ->pluck('count', 'month')
                            ->toArray();

        $monthlyData = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthlyData[] = $monthlyUsers[$i] ?? 0;
        }

        return view('dashboard', compact('userCount', 'labels', 'data', 'monthlyData'));
    }
}
