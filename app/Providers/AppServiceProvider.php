<?php

namespace App\Providers;

use App\Models\CustomerData;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Route;

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
        Route::get('/mp_admin/customer-datas', function () {
            $record = CustomerData::first();

            if ($record) {
                return redirect()->to("/mp_admin/customer-datas/{$record->id}");
            }

            dd('404', 'Customer Data not found.');
        });

        Collection::macro('hasOneCategory', function ($key,$column) {
            return $this->filter(function ($item) use ($key, $column){
                return in_array($key, $item->$column);
            });
        });
    }
}
