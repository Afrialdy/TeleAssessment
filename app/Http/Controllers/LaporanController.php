<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function laporan() {
        $users = User::select('id', 'name', 'kepribadian', 'bakat', 'intelegensi')->get();

        return view('laporan', compact('users'));
    }
}
