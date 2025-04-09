<?php

namespace App\Filament\Admin\Resources\PotencialResource\Pages;

use App\Filament\Admin\Resources\PotencialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPotencials extends ListRecords
{
    protected static string $resource = PotencialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
