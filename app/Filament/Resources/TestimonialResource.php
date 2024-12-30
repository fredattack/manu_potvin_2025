<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;

use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;


class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    protected static ?string $pluralLabel = 'Témoignages';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('author')
                    ->label('Auteur')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('content')
                    ->label('Contenu')
                    ->required(),
                Forms\Components\TextInput::make('city')
                    ->label('Ville')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('published')
                    ->label('Publier')
                    ->default(false),
                Forms\Components\DateTimePicker::make('created_at')
                    ->label('Date')
                    ->label('Created At'),

                Forms\Components\Select::make('realisation_id')
                    ->label('Rélisation')
                    ->relationship('realisation', 'title')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author')
                    ->label('Auteur')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('content')
                    ->label('Contenu')
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('city')
                    ->label('Ville')
                    ->sortable()
                    ->searchable(),
                BooleanColumn::make('published')
                    ->label('Publier'),
                TextColumn::make('created_at')
                    ->label('Date')
                    ->dateTime('j F Y')
            ])
            ->filters([
                SelectFilter::make('published')
                    ->options([
                        1 => 'Published',
                        0 => 'Unpublished',
                    ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
