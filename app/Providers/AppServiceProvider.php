<?php

namespace App\Providers;

use Illuminate\Support\Collection;
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
        Collection::macro('hasOneCategory', function ($key,$column) {
            return $this->filter(function ($item) use ($key, $column){
                return in_array($key, $item->$column);
            });
        });
    }
}
