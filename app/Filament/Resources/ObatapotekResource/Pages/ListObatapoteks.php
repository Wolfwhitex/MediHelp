<?php

namespace App\Filament\Resources\ObatapotekResource\Pages;

use App\Filament\Resources\ObatapotekResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListObatapoteks extends ListRecords
{
    protected static string $resource = ObatapotekResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
