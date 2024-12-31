<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerDataResource\Pages\ViewCustomerData;
use App\Models\CustomerData;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;


class CustomerDataResource extends Resource
{
    protected static ?string $model = CustomerData::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\Textarea::make('notes'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'view' => ViewCustomerData::route('/{record}'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['email', 'name'];
    }

    public static function getNavigationLabel(): string
    {
        return 'Customer Data';
    }

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }
}
