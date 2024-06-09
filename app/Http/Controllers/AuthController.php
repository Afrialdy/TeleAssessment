<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function postLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            $request->session()->put('name', $user->name); // Store the user's name in the session
            return redirect()->route('dashboard'); // Ensure this route exists
        } else {
            // Check if email exists
            $user = User::where('email', $request->email)->first();

            if ($user) {
                return back()->withErrors([
                    'password' => 'Password yang anda masukkan salah.',
                ])->withInput($request->only('email'));
            } else {
                return back()->withErrors([
                    'email' => 'Email yang anda masukkan salah.',
                ]);
            }
        }
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required'
        ]);

        if ($validator->fails()) {
            return response([
                'status' => false,
                'message' => 'Validation errors !',
                'error' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']); // Hash the password before saving

        $user = User::create($input);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    public function postLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login'); // Ensure this route exists
    }
}


