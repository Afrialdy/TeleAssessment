<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login'); // Updated path
    }

    public function getSignup()
    {
        return view('auth.signup'); // Updated path
    }

    public function postLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Cek apakah checkbox 'remember' tercentang

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = Auth::user();
            $request->session()->put('name', $user->name); // Store the user's name in the session

            // Simpan email di session jika 'Remember Me' dicentang
            if ($remember) {
                $request->session()->put('email', $request->email);
                $request->session()->put('remember', true);
            } else {
                $request->session()->forget('email');
                $request->session()->forget('remember');
            }

            return redirect()->route('dashboard');
        } else {
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
            'email' => ['required', 'email', function ($attribute, $value, $fail) {
                $domain = substr(strrchr($value, "@"), 1);
                if (!checkdnsrr($domain, 'MX')) {
                    $fail($attribute.' has an invalid domain.');
                }
            }],
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
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
        $request->session()->forget('email'); // Hapus email dari session
        $request->session()->forget('remember'); // Hapus remember dari session

        return redirect()->route('login');
    }
}
