<?php

namespace App\Providers;

use App\Models\CustomerData;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
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

            abort(404, 'Customer Data not found.');
        });

        Collection::macro('hasOneCategory', function ($key,$column) {
            return $this->filter(function ($item) use ($key, $column){
                return in_array($key, $item->$column);
            });
        });

        Filament::registerNavigationItems([
            NavigationItem::make('infos')
                ->url('/mp_admin/customer-datas/1') // Lien direct vers l'enregistrement
                ->icon('heroicon-o-identification') // Icône pour le menu
                ->group('Société') // Groupe pour organiser le menu
                ->sort(0), // Position dans le menu
        ]);
    }
}
