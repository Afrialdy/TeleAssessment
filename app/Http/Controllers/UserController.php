<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dataKandidat() {
        $users = User::all();
        return view('dataKandidat', compact('users'));
    }

    public function update($userId) {
        $user = User::find($userId);

        if($user) {
            if($user->is_active) {
                $user->is_active = 0;
            }
            else {
                $user->is_active = 1;
            }

            $user->save();
        }
        return back();
    }
}
