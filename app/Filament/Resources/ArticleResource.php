<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Contenu';

    protected static ?string $navigationLabel = 'Articles de blog';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Titre')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        Forms\Components\Textarea::make('excerpt')
                            ->label('Extrait')
                            ->required()
                            ->maxLength(500)
                            ->columnSpan('full'),

                        Forms\Components\RichEditor::make('content')
                            ->label('Contenu')
                            ->required()
                            ->columnSpan('full'),

                        Forms\Components\FileUpload::make('featured_image')
                            ->label('Image mise en avant')
                            ->image()
                            ->directory('blog')
                            ->columnSpan('full'),

                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('meta_title')
                                    ->label('Meta titre')
                                    ->maxLength(70)
                                    ->helperText('Laissez vide pour utiliser le titre de l\'article'),

                                Forms\Components\TextInput::make('meta_description')
                                    ->label('Meta description')
                                    ->maxLength(160)
                                    ->helperText('Laissez vide pour utiliser l\'extrait'),
                            ]),

                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Date de publication')
                            ->helperText('Laissez vide pour enregistrer comme brouillon'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Titre')
                    ->searchable()
                    ->sortable()
                    ->limit(50),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\ImageColumn::make('featured_image')
                    ->label('Image')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('published_at')
                    ->label('Publication')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->badge()
                    ->color(fn (?string $state): string => $state ? 'success' : 'gray')
                    ->formatStateUsing(fn (?string $state): string => $state ? \Carbon\Carbon::parse($state)->format('d/m/Y H:i') : 'Brouillon'),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Modifié')
                    ->dateTime('d/m/Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\Filter::make('published')
                    ->label('Publiés')
                    ->query(fn ($query) => $query->whereNotNull('published_at')->where('published_at', '<=', now())),
                Tables\Filters\Filter::make('draft')
                    ->label('Brouillons')
                    ->query(fn ($query) => $query->whereNull('published_at')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
