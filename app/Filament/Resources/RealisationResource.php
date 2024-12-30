<?php

namespace App\Filament\Resources;

use App\Enums\Categories;
use App\Filament\Resources\RealisationResource\Pages;
use App\Models\Realisation;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class RealisationResource extends Resource
{
    protected static ?string $model = Realisation::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?string $pluralLabel = 'Realisations';


    public static function form(Form $form): Form
    {
        return $form
            ->schema( [

                Toggle::make('published')
                    ->label('Publier')
                    ->default(true),

                Toggle::make('favorite')
                    ->label('Favoris')
                    ->default(false),

                TextInput::make( 'title' )
                    ->label( 'Titre')
                    ->required()
                    ->maxLength( 255 ),

                Textarea::make( 'description' ),

                Select::make( 'category' )
                    ->label( 'Catégorie')
                    ->required()
                    ->multiple()
                    ->options(
                        collect( Categories::all() )
                            ->filter( fn($item) => $item['key'] != 'tout' )
                            ->mapWithKeys( function($category) {
                                return [$category['key'] => $category['label']];
                            } )
                            ->toArray()
                    ),

                TextInput::make( 'place' )->label( 'Lieu'),

                DatePicker::make( 'date' ),

                TextInput::make( 'customer' )
                    ->placeholder( 'anonyme')
                    ->label( 'Client'),

                SpatieMediaLibraryFileUpload::make( 'illustration' )
                    ->responsiveImages()
                    ->collection( 'illustration' ),

                SpatieMediaLibraryFileUpload::make( 'gallery' )
                    ->label( 'Gallerie')
                    ->responsiveImages()
                    ->multiple()
                    ->collection( 'gallery' ),

            ] );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns( [
                SpatieMediaLibraryImageColumn::make( 'illustration' )
                    ->collection( 'illustration' ),

                TextColumn::make( 'title' )
                    ->label('Titre')
                    ->sortable()
                    ->searchable(),
                TextColumn::make( 'category' )
                    ->label('Catégorie')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing( function($state, $record) {
                        return Categories::getCategoryLabels( $record->category );
                    } ),
                TextColumn::make( 'place' )
                    ->label('Lieu')
                    ->sortable(),
                TextColumn::make( 'date' )
                    ->dateTime('j F Y'),
                BooleanColumn::make( 'published' )
                    ->label('Publié'),
                BooleanColumn::make( 'favorite' )
                    ->label('Favoris'),

            ] )
            ->defaultSort( 'ordre', 'asc' )
            ->reorderable( 'ordre' )
            ->filters( [
                Filter::make( 'published' )->query( fn($query) => $query->where( 'published', true ) ),
                Filter::make( 'favorite' )->query( fn($query) => $query->where( 'favorite', true ) ),
            ] );
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRealisations::route( '/' ),
            'create' => Pages\CreateRealisation::route( '/create' ),
            'edit' => Pages\EditRealisation::route( '/{record}/edit' ),
        ];
    }

}
