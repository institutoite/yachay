<?php

namespace App\Filament\Admin\Resources\PotencialResource\Pages;

use App\Filament\Admin\Resources\PotencialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPotencial extends EditRecord
{
    protected static string $resource = PotencialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
