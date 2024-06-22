<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PenilaianBeo;
use Illuminate\Http\Request;

class HasiltestController extends Controller
{
    public function hasilTest($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('assessment')->with('error', 'User not found');
        }

        // Assuming PenilaianBeo is related to the user, fetch it accordingly
        $penilaianBeo = PenilaianBeo::where('id_user', $user->id)->first();

        // Check if $penilaianBeo exists
        if (!$penilaianBeo) {
            return redirect()->route('assessment')->with('error', 'Assessment data not found');
        }

        $data = [];

        // Pass both $user and $penilaianBeo to the view
        return view('hasil-test', compact('user', 'penilaianBeo', 'data'));
    }
}
