<?php

namespace App\Filament\Admin\Resources\ClientePotencialResource\Pages;

use App\Filament\Admin\Resources\ClientePotencialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClientePotencials extends ListRecords
{
    protected static string $resource = ClientePotencialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
