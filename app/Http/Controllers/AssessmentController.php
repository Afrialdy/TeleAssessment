<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
    {
        $users = User::orderBy('updated_at', 'desc')->paginate(10);
        return view('assessment', compact('users'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        if ($query) {
            // Jika query adalah format tanggal, cari berdasarkan tanggal
            if (strtotime($query)) {
                $users = User::whereDate('updated_at', '=', date('Y-m-d', strtotime($query)))->get();
            } else {
                // Jika bukan tanggal, coba cari berdasarkan nama atau ID
                $users = User::where('name', 'LIKE', '%' . $query . '%')
                            ->orWhere('id', 'LIKE', '%' . $query . '%')
                            ->paginate(10);
            }
        } else {
            // Jika tidak ada query, ambil semua user
            $users = User::paginate(10);
        }

        if ($users->isEmpty()) {
            // Jika tidak ada hasil, redirect ke halaman sebelumnya dengan pesan flash
            return back();
        }

        return view('assessment', compact('users'));
    }

    public function getAllUsers()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function filterData(Request $request)
{
    $start_date = $request->input('start_date') . ' 00:00:00';
    $end_date = $request->input('end_date') . ' 23:59:59';

    $users = User::whereBetween('updated_at', [$start_date, $end_date])
                ->paginate(10)
                ->appends($request->all()); // Retain query parameters

    // Jika tidak ada hasil, redirect ke halaman sebelumnya dengan pesan flash
    if ($users->isEmpty()) {
        return back();
    }

    return view('assessment', compact('users'));
}
}
