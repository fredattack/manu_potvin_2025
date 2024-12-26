<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RealisationResource\Pages;
use App\Models\Realisation;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Table;

class RealisationResource extends Resource
{
    protected static ?string $model = Realisation::class;

//    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $pluralLabel = 'Realisations';
    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description'),

                TextInput::make('category')
                    ->required(),

                TextInput::make('place'),

                DatePicker::make('date'),

                TextInput::make('customer'),

                SpatieMediaLibraryFileUpload::make('illustration')
                    ->responsiveImages()
                ->collection( 'illustration'),

                SpatieMediaLibraryFileUpload::make('gallery')
                    ->responsiveImages()
                    ->multiple()
                    ->collection( 'gallery'),

                Select::make('published')
                    ->label('Published')
                    ->options([0 => 'No', 1 => 'Yes'])
                    ->default(0),

                Select::make('favorite')
                    ->label('Favorite')
                    ->options([0 => 'No', 1 => 'Yes'])
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('illustration')->collection( 'illustration'),

                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('category')->sortable()->searchable(),
                TextColumn::make('place')->sortable(),
                TextColumn::make('date')->date(),
                BooleanColumn::make('published'),
                BooleanColumn::make('favorite'),
                ImageColumn::make('illustration')->label('Illustration'),
            ])
            ->filters([
                Filter::make('published')->query(fn ($query) => $query->where('published', true)),
                Filter::make('favorite')->query(fn ($query) => $query->where('favorite', true)),
            ]);
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
