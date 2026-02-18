<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceAreaResource\Pages;
use App\Models\ServiceArea;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ServiceAreaResource extends Resource
{
    protected static ?string $model = ServiceArea::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';
    
    protected static ?string $navigationGroup = 'SEO & Marketing';
    
    protected static ?string $navigationLabel = 'Zones d\'intervention';
    
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Nom de la localité')
                                    ->required()
                                    ->maxLength(255),
                                    
                                Forms\Components\TextInput::make('postal_code')
                                    ->label('Code postal')
                                    ->maxLength(10),
                            ]),
                            
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('province')
                                    ->label('Province')
                                    ->default('Liège')
                                    ->maxLength(255),
                                    
                                Forms\Components\Select::make('priority')
                                    ->label('Priorité')
                                    ->options([
                                        10 => '10 - Très haute',
                                        9 => '9 - Haute',
                                        8 => '8 - Assez haute',
                                        7 => '7 - Moyenne-haute',
                                        6 => '6 - Moyenne',
                                        5 => '5 - Standard',
                                        4 => '4 - Moyenne-basse',
                                        3 => '3 - Basse',
                                        2 => '2 - Très basse',
                                        1 => '1 - Minimale',
                                    ])
                                    ->default(5)
                                    ->required(),
                            ]),
                            
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('latitude')
                                    ->label('Latitude')
                                    ->numeric()
                                    ->step(0.0000001),
                                    
                                Forms\Components\TextInput::make('longitude')
                                    ->label('Longitude')
                                    ->numeric()
                                    ->step(0.0000001),
                                    
                                Forms\Components\TextInput::make('radius')
                                    ->label('Rayon d\'intervention (km)')
                                    ->numeric()
                                    ->default(15)
                                    ->required(),
                            ]),
                            
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\Toggle::make('is_primary')
                                    ->label('Zone principale')
                                    ->default(false)
                                    ->helperText('Les zones principales sont affichées en priorité'),
                                    
                                Forms\Components\Toggle::make('active')
                                    ->label('Actif')
                                    ->default(true),
                            ]),
                            
                        Forms\Components\Textarea::make('notes')
                            ->label('Notes')
                            ->maxLength(65535)
                            ->columnSpan('full'),

                        Forms\Components\RichEditor::make('description')
                            ->label('Description SEO locale')
                            ->helperText('Contenu unique affiché sur les pages produit pour cette localité. Min. 200 caractères recommandé.')
                            ->columnSpan('full'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Localité')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('postal_code')
                    ->label('Code postal')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('province')
                    ->label('Province')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('priority')
                    ->label('Priorité')
                    ->sortable()
                    ->badge()
                    ->color(fn (int $state): string => match (true) {
                        $state >= 8 => 'success',
                        $state >= 5 => 'warning',
                        default => 'gray',
                    }),
                    
                Tables\Columns\IconColumn::make('is_primary')
                    ->label('Zone principale')
                    ->boolean(),
                    
                Tables\Columns\TextColumn::make('radius')
                    ->label('Rayon (km)')
                    ->numeric()
                    ->sortable(),
                    
                Tables\Columns\IconColumn::make('active')
                    ->label('Actif')
                    ->boolean(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('province')
                    ->label('Province')
                    ->options([
                        'Liège' => 'Liège',
                        'Brabant wallon' => 'Brabant wallon',
                        'Namur' => 'Namur',
                        'Luxembourg' => 'Luxembourg',
                        'Hainaut' => 'Hainaut',
                    ]),
                    
                Tables\Filters\Filter::make('is_primary')
                    ->label('Zones principales')
                    ->query(fn (Builder $query): Builder => $query->where('is_primary', true)),
                    
                Tables\Filters\Filter::make('active')
                    ->label('Zones actives')
                    ->query(fn (Builder $query): Builder => $query->where('active', true)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('generate_keywords')
                    ->label('Générer mots-clés')
                    ->icon('heroicon-o-sparkles')
                    ->color('success')
                    ->action(function (ServiceArea $record) {
                        $record->generateSeoKeywords();
                        
                        Notification::make()
                            ->title('Mots-clés générés avec succès')
                            ->success()
                            ->send();
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('generate_keywords_bulk')
                        ->label('Générer mots-clés')
                        ->icon('heroicon-o-sparkles')
                        ->action(function ($records) {
                            $count = 0;
                            foreach ($records as $record) {
                                $record->generateSeoKeywords();
                                $count++;
                            }
                            
                            Notification::make()
                                ->title("Mots-clés générés pour {$count} zones")
                                ->success()
                                ->send();
                        })
                        ->deselectRecordsAfterCompletion(),
                    Tables\Actions\BulkAction::make('activate')
                        ->label('Activer')
                        ->icon('heroicon-o-check')
                        ->action(fn ($records) => $records->each->update(['active' => true]))
                        ->deselectRecordsAfterCompletion(),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->label('Désactiver')
                        ->icon('heroicon-o-x-mark')
                        ->action(fn ($records) => $records->each->update(['active' => false]))
                        ->deselectRecordsAfterCompletion(),
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
            'index' => Pages\ListServiceAreas::route('/'),
            'create' => Pages\CreateServiceArea::route('/create'),
            'edit' => Pages\EditServiceArea::route('/{record}/edit'),
        ];
    }
}
