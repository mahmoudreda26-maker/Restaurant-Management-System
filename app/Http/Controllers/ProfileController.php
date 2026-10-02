<?php

namespace App\Http\Controllers;

use App\Services\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct(
        private ProfileService $profileService
    ) {}

    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
        ]);

        $this->profileService->updateProfile(
            Auth::user(),
            $validated
        );

        return back()->with(
            'success',
            'تم تحديث بيانات الملف الشخصي بنجاح.'
        );
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $this->profileService->changePassword(
            Auth::user(),
            $validated['current_password'],
            $validated['new_password']
        );

        return back()->with(
            'success',
            'تم تغيير كلمة المرور بنجاح.'
        );
    }
}