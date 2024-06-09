<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        $userCount = User::count();
        return view('dashboard', compact('userCount'));
    }
}
