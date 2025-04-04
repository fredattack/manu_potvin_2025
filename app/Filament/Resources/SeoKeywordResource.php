<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoKeywordResource\Pages;
use App\Models\SeoKeyword;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SeoKeywordResource extends Resource
{
    protected static ?string $model = SeoKeyword::class;

    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass';
    
    protected static ?string $navigationGroup = 'SEO & Marketing';
    
    protected static ?string $navigationLabel = 'Mots-clés SEO';
    
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Select::make('page_type')
                            ->label('Type de page')
                            ->options([
                                'fenetres' => 'Fenêtres',
                                'portes' => 'Portes',
                                'chassis' => 'Châssis',
                                'pergolas' => 'Pergolas',
                                'home' => 'Page d\'accueil',
                            ])
                            ->required(),
                            
                        Forms\Components\TextInput::make('location')
                            ->label('Localité')
                            ->helperText('Laissez vide pour les mots-clés sans localité spécifique')
                            ->maxLength(255),
                            
                        Forms\Components\TextInput::make('keyword')
                            ->label('Mot-clé')
                            ->required()
                            ->maxLength(255),
                            
                        Forms\Components\Select::make('intention')
                            ->label('Intention de recherche')
                            ->options([
                                'transactionnelle' => 'Transactionnelle',
                                'informationnelle' => 'Informationnelle',
                                'navigationnelle' => 'Navigationnelle',
                            ])
                            ->required(),
                            
                        Forms\Components\TextInput::make('volume_estime')
                            ->label('Volume estimé')
                            ->numeric()
                            ->helperText('Nombre estimé de recherches mensuelles'),
                            
                        Forms\Components\Select::make('difficulte')
                            ->label('Difficulté')
                            ->options([
                                'faible' => 'Faible',
                                'moyenne' => 'Moyenne',
                                'elevee' => 'Élevée',
                            ])
                            ->default('moyenne')
                            ->required(),
                            
                        Forms\Components\Select::make('pertinence_metier')
                            ->label('Pertinence métier')
                            ->options([
                                1 => '1 - Très faible',
                                2 => '2 - Faible',
                                3 => '3 - Moyenne',
                                4 => '4 - Élevée',
                                5 => '5 - Très élevée',
                            ])
                            ->default(3)
                            ->required(),
                            
                        Forms\Components\Toggle::make('active')
                            ->label('Actif')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('keyword')
                    ->label('Mot-clé')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('page_type')
                    ->label('Type de page')
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'fenetres' => 'Fenêtres',
                        'portes' => 'Portes',
                        'chassis' => 'Châssis',
                        'pergolas' => 'Pergolas',
                        'home' => 'Accueil',
                        default => $state,
                    }),
                    
                Tables\Columns\TextColumn::make('location')
                    ->label('Localité')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('intention')
                    ->label('Intention')
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'transactionnelle' => 'success',
                        'informationnelle' => 'info',
                        'navigationnelle' => 'warning',
                        default => 'gray',
                    }),
                    
                Tables\Columns\TextColumn::make('volume_estime')
                    ->label('Volume')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('pertinence_metier')
                    ->label('Pertinence')
                    ->sortable()
                    ->formatStateUsing(fn (int $state): string => str_repeat('★', $state) . str_repeat('☆', 5 - $state)),
                    
                Tables\Columns\IconColumn::make('active')
                    ->label('Actif')
                    ->boolean(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('page_type')
                    ->label('Type de page')
                    ->options([
                        'fenetres' => 'Fenêtres',
                        'portes' => 'Portes',
                        'chassis' => 'Châssis',
                        'pergolas' => 'Pergolas',
                        'home' => 'Accueil',
                    ]),
                    
                Tables\Filters\SelectFilter::make('intention')
                    ->label('Intention')
                    ->options([
                        'transactionnelle' => 'Transactionnelle',
                        'informationnelle' => 'Informationnelle',
                        'navigationnelle' => 'Navigationnelle',
                    ]),
                    
                Tables\Filters\Filter::make('with_location')
                    ->label('Avec localité')
                    ->query(fn (Builder $query): Builder => $query->whereNotNull('location')->where('location', '!=', '')),
                    
                Tables\Filters\Filter::make('without_location')
                    ->label('Sans localité')
                    ->query(fn (Builder $query): Builder => $query->where(fn ($query) => $query->whereNull('location')->orWhere('location', ''))),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('activate')
                        ->label('Activer')
                        ->action(fn (SeoKeyword $record) => $record->update(['active' => true]))
                        ->requiresConfirmation()
                        ->deselectRecordsAfterCompletion()
                        ->icon('heroicon-o-check'),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->label('Désactiver')
                        ->action(fn (SeoKeyword $record) => $record->update(['active' => false]))
                        ->requiresConfirmation()
                        ->deselectRecordsAfterCompletion()
                        ->icon('heroicon-o-x-mark'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSeoKeywords::route('/'),
            'create' => Pages\CreateSeoKeyword::route('/create'),
            'edit' => Pages\EditSeoKeyword::route('/{record}/edit'),
        ];
    }
}
