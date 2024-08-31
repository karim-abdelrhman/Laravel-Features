<?php

namespace App\Providers;

use App\Models\CovidCase;
use App\Observers\CovidCaseObserver;
use Illuminate\Support\ServiceProvider;

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
        CovidCase::observe(CovidCaseObserver::class);
    }
}
