<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KonsumenResource\Pages;
use App\Filament\Resources\KonsumenResource\RelationManagers;
use App\Models\Konsumen;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KonsumenResource extends Resource
{
    protected static ?string $model = Konsumen::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('username')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('umur')
                ->required()
                ->numeric(),
                Forms\Components\TextInput::make('alamat')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('notelpon')
                ->required()
                ->tel()
                ->maxLength(15),
                Forms\Components\TextInput::make('email')
                ->required()
                ->email()
                ->maxLength(255),
                Forms\Components\TextInput::make('password')
                ->required()
                ->password()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(), 
                Tables\Columns\TextColumn::make('umur'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('notelpon'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
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
            'index' => Pages\ListKonsumens::route('/'),
            'create' => Pages\CreateKonsumen::route('/create'),
            'edit' => Pages\EditKonsumen::route('/{record}/edit'),
        ];
    }    
}
