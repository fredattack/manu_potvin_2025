<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Models\Customer;

use Filament\Forms\Form;
use Filament\Resources\Resource;

use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Table;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $pluralLabel = 'Clients';
    protected static ?string $label = 'Client';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                TextInput::make('nom')
                    ->label('Nom')
                    ->required(),
                TextInput::make('adresse')
                    ->label('Adresse')
                    ->required(),
                TextInput::make('phone')
                    ->label('Téléphone')
                    ->required(),
                Toggle::make('newsletter')
                    ->label('Abonné à la newsletter'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('email')->label('Email')->sortable()->searchable(),
                TextColumn::make('nom')->label('Nom')->sortable()->searchable(),
                TextColumn::make('adresse')->label('Adresse')->sortable(),
                TextColumn::make('phone')->label('Téléphone')->sortable(),
                BooleanColumn::make('newsletter')->label('Newsletter'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
