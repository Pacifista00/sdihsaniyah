<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return null;
        }

        // kasih pesan flash biar nanti di blade bisa dipanggil
        session()->flash('error', 'Silakan login dulu untuk mengakses halaman ini.');

        return url('/login');
    }
}
