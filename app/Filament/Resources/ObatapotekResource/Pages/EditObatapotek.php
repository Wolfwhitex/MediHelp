<?php

namespace App\Filament\Resources\ObatapotekResource\Pages;

use App\Filament\Resources\ObatapotekResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObatapotek extends EditRecord
{
    protected static string $resource = ObatapotekResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
