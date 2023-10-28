<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        /* pour éviter l'erreur : Syntax error or access violation: 1071 La clé est trop longue. Longueur maximale: 1000 (Connection: mysql, SQL: alter table `password_reset_tokens` add primary key (`email`)) */

        /* Link : https://stackoverflow.com/questions/63015038/laravel-error-1071-key-was-too-long-php-artisan-migrate */
        Schema::defaultStringLength(191);
    }
}
