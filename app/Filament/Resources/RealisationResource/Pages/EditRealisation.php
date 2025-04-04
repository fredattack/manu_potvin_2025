<?php

namespace App\Filament\Resources\RealisationResource\Pages;

use App\Filament\Resources\RealisationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRealisation extends EditRecord
{
    protected static string $resource = RealisationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
