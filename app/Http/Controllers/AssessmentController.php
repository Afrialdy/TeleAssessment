<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
{
    $users = User::with('penilaianBeo')->orderBy('updated_at', 'desc')->paginate(10);
    return view('assessment', compact('users'));
}

public function search(Request $request)
{
    $query = $request->input('search');

    if ($query) {
        if (strtotime($query)) {
            $users = User::whereHas('penilaianBeo', function($q) use ($query) {
                $q->whereDate('tanggal_penilaian', '=', date('Y-m-d', strtotime($query)));
            })->paginate(10);
        } else {
            $users = User::where('nama_lengkap', 'LIKE', '%' . $query . '%')
                        ->orWhere('id', 'LIKE', '%' . $query . '%')
                        ->with('penilaianBeo')
                        ->paginate(10);
        }
    } else {
        $users = User::with('penilaianBeo')->paginate(10);
    }

    if ($users->isEmpty()) {
        return back();
    }

    return view('assessment', compact('users'));
}

public function filterData(Request $request)
{
    $start_date = $request->input('start_date') . ' 00:00:00';
    $end_date = $request->input('end_date') . ' 23:59:59';

    $users = User::whereHas('penilaianBeo', function($query) use ($start_date, $end_date) {
        $query->whereBetween('tanggal_penilaian', [$start_date, $end_date]);
    })->paginate(10)->appends($request->all());

    if ($users->isEmpty()) {
        return back();
    }

    return view('assessment', compact('users'));
}

public function getAllUsers()
{
    $users = User::with('penilaianBeo')->get();
    return response()->json($users);
}
}
