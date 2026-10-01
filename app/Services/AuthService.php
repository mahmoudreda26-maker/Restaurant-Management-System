<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthService
{

    public function __construct() {}

    public function login(array $data)
    {
        if (!Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password'],
        ])) {
            throw ValidationException::withMessages([
                'email' => ['بيانات تسجيل الدخول غير صحيحة.'],
            ]);
        }

        return Auth::user();
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }
}
