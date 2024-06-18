<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ObatapotekResource\Pages;
use App\Filament\Resources\ObatapotekResource\RelationManagers;
use App\Models\Obatapotek;
use Filament\Forms\Components\Select;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ObatapotekResource extends Resource
{
    protected static ?string $model = Obatapotek::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('ApotekID')
                ->relationship('apotek','nama_apotek')
                ->required(),
                Forms\Components\TextInput::make('Namaobat')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('Hargaobat')
                ->required()
                ->numeric()
                ->prefix('Rp'),
                Forms\Components\TextInput::make('Stokobat')
                ->required()
                ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Apotek.Nama_Apotek')->sortable(),
                TextColumn::make('Namaobat'),
                TextColumn::make('Hargaobat')
                ->formatStateUsing(fn ($state) => 'Rp' . number_format($state, 0, ',', '.'))
                ->sortable(),
                TextColumn::make('Stokobat')
                ->formatStateUsing(fn ($state) => number_format($state))
                ->sortable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                 ->dateTime(),
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
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListObatapoteks::route('/'),
            'create' => Pages\CreateObatapotek::route('/create'),
            'edit' => Pages\EditObatapotek::route('/{record}/edit'),
        ];
    }    
}
