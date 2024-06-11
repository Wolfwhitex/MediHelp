<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CheckPassword
{
    public function handle($request, Closure $next)
    {
        // Hanya periksa password jika user sudah terotentikasi
        if (Auth::check()) {
            $user = Auth::user();
            // Periksa apakah password perlu di-hash ulang
            if (Hash::needsRehash($user->password)) {
                // Hashing ulang password
                $user->password = Hash::make($user->password);
                $user->save();
            }
        }

        return $next($request);
    }
}
