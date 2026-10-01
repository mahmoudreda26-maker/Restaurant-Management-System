<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(
        private AuthService $authService
    ) {}

    public function login()
    {
        return view('pages.auth.login');
    }

    public function submitLogin(LoginRequest $request)
    {
        $user = $this->authService->login(
            $request->validated()
        );

        return match ($user->role) {
            'admin' => redirect()->route('pages.dashboard.admin'),
            'waiter' => redirect()->route('pages.dashboard.waiter'),
            'cashier' => redirect()->route('pages.dashboard.cashier'),
            'kitchen_staff' => redirect()->route('pages.dashboard.kitchen'),
        };
    }

    public function logout()
    {
        $this->authService->logout();

        return redirect()->route('login');
    }
}