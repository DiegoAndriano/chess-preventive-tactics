<?php

namespace App\Providers;

use App\Http\Gateway\Lichess;
use App\Services\LichessService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LichessService::class, function () {
            return new LichessService(new Lichess());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
