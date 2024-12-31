<?php

namespace App\Filament\Resources\CustomerDataResource\Pages;

use App\Filament\Resources\CustomerDataResource;
use App\Models\CustomerData;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCustomerData extends ViewRecord
{
    protected static string $resource = CustomerDataResource::class;
    protected static ?string $title = 'Infos sociétés';

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
    public static function getResource(): string
    {
        return CustomerDataResource::class;
    }

    public function getBreadcrumbs(): array
    {
        return [

        ];
    }
    public function getRecord(): CustomerData
    {
        return CustomerData::firstOrFail(); // Chargez le premier enregistrement comme record actuel
    }

    public function mount(int|string $record): void
    {
        $this->record = CustomerData::firstOrFail(); // Load the first and unique record
    }

}
