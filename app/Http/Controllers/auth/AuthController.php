<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {

            $rules = [
                'name' => 'required|regex:/[a-zA-Z]/',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:8|confirmed',
            ];

            $messages = [
                'name.regex' => __('validation.regex', ['attribute' => 'Name']),
                'email.unique' => __('validation.unique', ['attribute' => 'Email ID']),
                'password.confirmed' => __('validation.confirmed', ['attribute' => 'Confirm Password'])
            ];

            $validation = Validator::make($request->all(), $rules, $messages);

            if ($validation->fails()) {

                return redirect()->back()->withErrors($validation);
            }

            $validated = $validation->validated();
            $validated['password'] = Hash::make($validated['password']);

            User::insert($validated);

            return redirect('/login');
        } catch (Exception $exception) {

            return $exception->getMessage();
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
