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

//    protected static ?string $navigationIcon = 'heroicon-o-annotation';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('author')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('content')
                    ->required(),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('published')
                    ->label('Published')
                    ->default(false),
                Forms\Components\DateTimePicker::make('created_at')
                    ->label('Created At'),

                Forms\Components\Select::make('realisation_id')
                    ->relationship('realisation', 'title')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author')->sortable()->searchable(),
                TextColumn::make('content')
                    ->limit(50)
                    ->sortable(),
                TextColumn::make('city')->sortable()->searchable(),
                BooleanColumn::make('published')
                    ->label('Published'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created At'),
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
