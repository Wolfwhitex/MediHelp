<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KonsultanResource\Pages;
use App\Filament\Resources\KonsultanResource\RelationManagers;
use App\Models\Konsultan;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KonsultanResource extends Resource
{
    protected static ?string $model = Konsultan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('KonsultanID')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('Nama')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('Spesialisasi')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('NoTelepon')
                    ->required()
                    ->maxLength(15),
                
                Forms\Components\TextInput::make('Email')
                    ->maxLength(255),

                Forms\Components\TextInput::make('Alamat')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('KonsultanID')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('Nama'),
                Tables\Columns\TextColumn::make('Spesialisasi')->searchable(),
                Tables\Columns\TextColumn::make('NoTelepon'),
                Tables\Columns\TextColumn::make('Email'),
                Tables\Columns\TextColumn::make('Alamat'),
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
            'index' => Pages\ListKonsultans::route('/'),
            'create' => Pages\CreateKonsultan::route('/create'),
            'edit' => Pages\EditKonsultan::route('/{record}/edit'),
        ];
    }    
}
