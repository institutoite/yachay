<?php

namespace App\Filament\Admin\Resources\ClientePotencialResource\Pages;

use App\Filament\Admin\Resources\ClientePotencialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClientePotencial extends EditRecord
{
    protected static string $resource = ClientePotencialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
