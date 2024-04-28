<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Travel;
use App\Observers\TravelObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Travel::observe(TravelObserver::class);
    }
}
