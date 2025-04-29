<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\App;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $locale = Request::segment(1); // Ambil {lang} dari URL
        if (in_array($locale, ['en', 'id'])) {
            App::setLocale($locale);
        }
        // app()->setLocale(session('locale', config('app.locale')));
    }
}
