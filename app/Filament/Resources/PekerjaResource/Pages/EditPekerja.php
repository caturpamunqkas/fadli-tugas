<?php

namespace App\Filament\Resources\PekerjaResource\Pages;

use App\Filament\Resources\PekerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPekerja extends EditRecord
{
    protected static string $resource = PekerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
