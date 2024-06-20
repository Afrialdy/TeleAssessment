<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function laporan() {
        // Mengambil data user dan mengurutkan berdasarkan 'updated_at' secara descending
        $users = User::select('id', 'nama_lengkap', 'kepribadian', 'bakat', 'intelegensi')
                     ->orderBy('updated_at', 'desc')
                     ->get();

        return view('laporan', compact('users'));
    }
}
