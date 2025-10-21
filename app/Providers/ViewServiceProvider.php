<?php

namespace App\Providers;

use App\Models\MenuLink;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer('partials.public.header', function ($view) {
            $view->with('menuLinks', MenuLink::orderBy('weight')->get());
        });
    }
}
