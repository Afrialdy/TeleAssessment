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
            'username' => 'required|string',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Manual login
            Auth::login($user);

            $request->session()->regenerate();
            $request->session()->put('name', $user->name);

            if ($request->has('remember')) {
                $request->session()->put('username', $request->username);
                $request->session()->put('remember', true);
            } else {
                $request->session()->forget('username');
                $request->session()->forget('remember');
            }

            return redirect()->route('dashboard');
        } else {
            return back()->withErrors([
                'password' => 'Password yang anda masukkan salah.',
            ])->withInput($request->only('username'));
        }
    }


    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:64|unique:users,username',
            'email' => ['required', 'email', function ($attribute, $value, $fail) {
                $emailParts = explode('@', $value);
                $domain = array_pop($emailParts);
                if (!filter_var($value, FILTER_VALIDATE_EMAIL) || !checkdnsrr($domain, 'MX')) {
                    $fail($attribute . ' has an invalid domain.');
                }
            }],
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required',
            'jenis_kelamin' => 'required|integer',
            'usia' => 'required|integer',
            'pendidikan_terakhir' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']); // Hash the password
        $input['is_active'] = 1; // set is_active to 1

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
