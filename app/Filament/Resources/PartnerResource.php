<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Models\Partner;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $slug = 'partners';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema( [
                TextInput::make( 'name' )
                    ->required(),

                Placeholder::make( 'created_at' )
                    ->label( 'Created Date' )
                    ->content( fn(?Partner $record): string => $record?->created_at?->diffForHumans() ?? '-' ),

                Placeholder::make( 'updated_at' )
                    ->label( 'Last Modified Date' )
                    ->content( fn(?Partner $record): string => $record?->updated_at?->diffForHumans() ?? '-' ),
            ] );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns( [
                TextColumn::make( 'name' )
                    ->searchable()
                    ->sortable(),
            ] )
            ->filters( [
                TrashedFilter::make(),
            ] )
            ->actions( [
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ] )
            ->bulkActions( [
                BulkActionGroup::make( [
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                ] ),
            ] );
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPartners::route( '/' ),
            'create' => Pages\CreatePartner::route( '/create' ),
            'edit' => Pages\EditPartner::route( '/{record}/edit' ),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes( [
                SoftDeletingScope::class,
            ] );
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
