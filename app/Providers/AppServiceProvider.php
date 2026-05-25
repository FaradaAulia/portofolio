<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <-- 1. WAJIB TAMBAH BARIS INI

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 2. TAMBAH KONDISI INI: Jika berjalan di server (production), paksa pakai HTTPS
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}