<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use InvalidArgumentException;

class ProfileService
{
    public function updateProfile(User $user, array $data): User
    {
        return DB::transaction(function () use ($user, $data) {
            $user->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone'] ?? null,
            ]);

            return $user->fresh();
        });
    }

    public function changePassword(
        User $user,
        string $currentPassword,
        string $newPassword
    ): void {
        if (!Hash::check($currentPassword, $user->password)) {
            throw new InvalidArgumentException(
                'كلمة المرور الحالية غير صحيحة.'
            );
        }

        $user->update([
            'password' => Hash::make($newPassword),
        ]);
    }
}