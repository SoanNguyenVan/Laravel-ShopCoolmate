<?php

namespace App\Providers;

use App\View\CartHeaderComposer;
use App\View\ProductNewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('parts.product_new',ProductNewComposer::class);
        View::composer('parts.header',CartHeaderComposer::class);
    }
}
